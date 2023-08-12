<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('category', categoryController::class, ['except' => [
    'create', 'update','show'
]]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/find', [App\Http\Controllers\HomeController::class, 'find'])->name('find');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('menu/modal/dokter', [App\Http\Controllers\HomeController::class, 'tambahdokter']);
Route::get('menu/modal/jpadokter/{id}', [App\Http\Controllers\HomeController::class, 'jpadokter']);
Route::get('menu/modal/formjpadokter/{id}', [App\Http\Controllers\HomeController::class, 'formjpadokter']);
Route::get('modal/data/kota/{id}', [App\Http\Controllers\HomeController::class, 'datakota']);
Route::get('modal/data/distric/{id}', [App\Http\Controllers\HomeController::class, 'datadistric']);
Route::post('simpandatadokter', [App\Http\Controllers\HomeController::class, 'posttambahdokter']);
Route::post('simpandatajpadokter', [App\Http\Controllers\HomeController::class, 'posttambahjpadokter']);
Route::post('updatedatadokter', [App\Http\Controllers\HomeController::class, 'postupdatedatadokter']);

// Route::get('menu/modal/dokter',['as'=>'menu/modal/dokter','uses'=> 'HomeController@tambahdokter']);
