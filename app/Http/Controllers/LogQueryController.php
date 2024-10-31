<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LogQueryController extends Controller
{
//     public function someCrudAction()
// {
//     // Enable query logging
//     DB::enableQueryLog();

//     // Your CRUD action here (create, update, delete, etc.)
//     $users = DB::table('users')->get();

//     // Log queries after the action
//     $queries = DB::getQueryLog();

//     // Store each query into the 'save_queries' table
//     foreach ($queries as $query) {
//         if (strpos($query['query'], 'save_queries') === false) {
//             DB::table('save_queries')->insert([
//                 'query' => $query['query'],
//                 'time' => $query['time'],
//                 'created_at' => now(),
//                 'updated_at' => now(),
//             ]);
//         }
//     }

//     // Return a response, if needed
//     return $users;
// }
}
