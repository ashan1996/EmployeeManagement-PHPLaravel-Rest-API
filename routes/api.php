<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/employee', 'EmployeeController@create');
Route::get('/employee/{id}', 'EmployeeController@employeeById');
Route::put('/employee/{id}', 'EmployeeController@updateEmployee');
Route::delete('/employee/{id}', 'EmployeeController@deleteEmployeeById');
