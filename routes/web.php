<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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


/*Route::get('/', function () {
    return view('welcome');
})->middleware('auth');
*/
Auth::routes();
Route::get('show',[CategoryController::class,'index'])->middleware('auth','checkUser');
Route::post('insert',[CategoryController::class,'store'])->middleware('auth','checkUser');
Route::get('create',[CategoryController::class,'create'])->middleware('auth','checkUser');
Route::get('delete/{id}',[CategoryController::class,'destroy'])->middleware('auth','checkUser');
Route::get('edit/{id}',[CategoryController::class,'edit'])->middleware('auth','checkUser');
Route::post('update/{id}',[CategoryController::class,'update'])->middleware('auth','checkUser');


Route::get('Product/show',[ProductController::class,'index'])->middleware('auth','checkUser');
Route::post('Product/insert',[ProductController::class,'store'])->middleware('auth','checkUser');
Route::get('Product/create',[ProductController::class,'create'])->middleware('auth','checkUser');
Route::get('Product/delete/{id}',[ProductController::class,'destroy'])->middleware('auth','checkUser');
Route::get('Product/edit/{id}',[ProductController::class,'edit'])->middleware('auth','checkUser');
Route::post('Product/update/{id}',[ProductController::class,'update'])->middleware('auth','checkUser');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Auth::routes();
Route::get('Order',[OrderController::class,'index'])->middleware('auth');
Route::get('Order/create',[OrderController::class,'create'])->middleware('auth');
Route::post('Order/store',[OrderController::class,'store'])->middleware('auth');
Route::get('Order/edit/{id}',[OrderController::class,'edit'])->middleware('auth');
Route::get('Order/delete/{id}',[OrderController::class,'delete'])->middleware('auth');
Route::post('Order/update/{id}',[OrderController::class,'update'])->middleware('auth');

Route::get('/',[FrontController::class,'index'])->middleware('auth');
