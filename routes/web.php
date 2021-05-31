<?php

use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/student/',"App\Http\Controllers\StudentController@index") ;
Route::get('/student/edit/{id}',"App\Http\Controllers\StudentController@edit") ;
Route::get('/student/show/{id}',"App\Http\Controllers\StudentController@show") ;
Route::get('/student/create',"App\Http\Controllers\StudentController@create") ;
Route::post('/student/store',"App\Http\Controllers\StudentController@store") ;
Route::post('/student/update/{id}',"App\Http\Controllers\StudentController@update") ;
Route::get('/student/delete/{id}',"App\Http\Controllers\StudentController@destroy") ;

Route::get('/debt/',"App\Http\Controllers\DebtController@index") ;
Route::get('/debt/edit/{id}',"App\Http\Controllers\DebtController@edit") ;
Route::get('/debt/show/{id}',"App\Http\Controllers\DebtController@show") ;
Route::get('/debt/create',"App\Http\Controllers\DebtController@create") ;
Route::get('/debt/indebted',"App\Http\Controllers\DebtController@indebted") ;
Route::get('/debt/paid',"App\Http\Controllers\DebtController@paid") ;
Route::get('/debt/studentsort',"App\Http\Controllers\DebtController@sortByStudent") ;
Route::get('/debt/paymentsort',"App\Http\Controllers\DebtController@sortByPayment") ;
Route::get('/debt/historysort',"App\Http\Controllers\DebtController@sortByHistory") ;
Route::post('/debt/store',"App\Http\Controllers\DebtController@store") ;
Route::post('/debt/update/{id}',"App\Http\Controllers\DebtController@update") ;
Route::get('/debt/delete/{id}',"App\Http\Controllers\DebtController@delete") ;


Auth::routes();

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('home', [HomeController::class, 'index'])->name('home');
