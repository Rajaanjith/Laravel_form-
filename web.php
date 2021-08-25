<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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
/*
To show in the browser 1. localhost/crud 
                        2. localhost/edit 
                        3. localhost/email 
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('crud',[CrudController::class,'index']);
Route::post('crud',[CrudController::class,'upload']);
Route::post('add',[CrudController::class,'add']);

Route::get('list',[CrudController::class,'show']);
Route::get('delete/{id}',[CrudController::class,'delete']);
Route::get('edit/{id}',[CrudController::class,'showData']);
Route::post('edit',[CrudController::class,'update']);

Route::get('/email',[CrudController::class,'create']);
