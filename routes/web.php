<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//GET: Lista, POST: Adiciona, PUT: Edita, DELETE: Deleta.
Route::get('/', function () {
    return view('welcome');
});

Route::get('/department/index', [DepartmentController::class, 'index']);
Route::get('/employee/index', [EmployeeController::class, 'index']);
Route::get('/employee/create', [EmployeeController::class, 'create']);
Route::post('/employee/createForm', [EmployeeController::class, 'createForm']);
