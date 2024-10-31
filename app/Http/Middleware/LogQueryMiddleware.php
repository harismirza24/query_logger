<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class LogQueryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // DB::enableQueryLog();
        
        // Process the request
        $response = $next($request);

        // Capture the queries executed
        // $queries = DB::getQueryLog();

        // // Insert each query into the 'save_queries' table
        // foreach ($queries as $query) {
        //     // Skip logging save_queries table actions to avoid recursion
        //     if (strpos($query['query'], 'save_queries') === false) {
        //         DB::table('save_queries')->insert([
        //             'query' => $query['query'], // SQL Query
        //             'time' => $query['time'],   // Execution time
        //             'created_at' => now(),
        //             'updated_at' => now(),
        //         ]);
        //     }
        // }

        return $response;
    }
}
