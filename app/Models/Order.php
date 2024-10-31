<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property $id
 * @property $customer_name
 * @property $business_partner_name
 * @property $product_name
 * @property $product_number
 * @property $total_amount
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Order extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['customer_name', 'business_partner_name', 'product_name', 'product_number', 'total_amount', 'status'];



    protected static function boot()
    {
        parent::boot();

        // Listen to the `creating` event
        static::creating(function ($model) {
            $sql = self::generateRawSql($model, 'insert');
            SaveQuery::create(['query' => $sql, 'type' => 'create']);
        });

        // Listen to the `updating` event
        static::updating(function ($model) {
            $sql = self::generateRawSql($model, 'update');
            SaveQuery::create(['query' => $sql, 'type' => 'update']);
        });

        // Listen to the `deleting` event
        static::deleting(function ($model) {
            $sql = self::generateRawSql($model, 'delete');
            SaveQuery::create(['query' => $sql, 'type' => 'delete']);
        });
    }

    /**
     * Generate raw SQL for the model action.
     */
    protected static function generateRawSql($model, $action)
    {
        $table = $model->getTable();
        $primaryKey = $model->getKeyName();

        if ($action === 'insert') {
            $fields = implode(", ", array_keys($model->getAttributes()));
            $values = implode(", ", array_map(fn($value) => "'$value'", $model->getAttributes()));
            return "INSERT INTO $table ($fields) VALUES ($values);";
        } elseif ($action === 'update') {
            $updates = collect($model->getDirty())
                ->map(fn($value, $key) => "$key = '$value'")
                ->implode(", ");
            return "UPDATE $table SET $updates WHERE $primaryKey = '{$model->getKey()}';";
        } elseif ($action === 'delete') {
            return "DELETE FROM $table WHERE $primaryKey = '{$model->getKey()}';";
        }

        return '';
    }

}
