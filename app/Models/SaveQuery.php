<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveQuery extends Model
{
    use HasFactory;
    protected $connection = 'querylog'; // Use the 'querylog' connection

    protected $guarded=[];
}
