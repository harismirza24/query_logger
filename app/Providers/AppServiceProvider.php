<?php

namespace App\Providers;

use App\Models\SaveQuery;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // DB::listen(function ($query) {
        //     // Combine the query and bindings to get the full SQL query
        //     $fullQuery = $this->bindValuesToQuery($query->sql, $query->bindings);

        //     // Save the query to the SaveQuery model
        //     SaveQuery::create([
        //         'query' => $fullQuery, // Store the full SQL query
        //         'bindings' => json_encode($query->bindings), // Optionally store bindings for reference
        //         'time' => $query->time,
        //     ]);
        // });

        // DB::listen(function ($query) {
        //     // Capture only CRUD operations
        //     if (str_starts_with($query->sql, 'insert') || 
        //         str_starts_with($query->sql, 'update') || 
        //         str_starts_with($query->sql, 'select')) {
                
        //         // Get the actual values for bindings
        //         $rawQuery = vsprintf(str_replace('?', '%s', $query->sql), $query->bindings);
                
        //         // Store the raw query in the database
        //         SaveQuery::create(['query' => $rawQuery]);
        //     }
        // });
    }

    // protected function bindValuesToQuery($sql, $bindings)
    // {
    //     foreach ($bindings as $binding) {
    //         // Convert the binding to a string, escaping any single quotes
    //         $binding = is_numeric($binding) ? $binding : "'".str_replace("'", "\'", $binding)."'";
    //         $sql = preg_replace('/\?/', $binding, $sql, 1);
    //     }
    //     return $sql;
    // }
}
