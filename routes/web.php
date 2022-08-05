<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Navbar
Route::get('/nav', [EmployeeController::class , 'nav']);
// Crud
Route::get('/create-emp', [EmployeeController::class,'create'])->name('create-emp');
Route::get('/employees', [EmployeeController::class,'index'])->name('employees');
Route::get('edit-emp/{id}', [EmployeeController::class , 'edit'])->name('edit-emp');

Route::post('update-emp/{id}', [EmployeeController::class ,'update'])->name('update-emp');
Route::post('store-emp', [EmployeeController::class , 'store'])->name('store-emp');
Route::get('delete-emp/{id}', [EmployeeController::class , 'delete'])->name('delete-emp');
// Products crud
Route::get('/create-pro', [ProductController::class , 'create'])->name('create-pro');
Route::post('/store-pro', [ProductController::class , 'store'])->name('store-pro');
Route::get('/products', [ProductController::class , 'index'])->name('products');
Route::get('edit-pro/{id}', [ProductController::class , 'edit'])->name('edit-pro/');
Route::post('update-pro/{id}', [ProductController::class , 'update'])->name('update-pro/');
Route::get('delete-pro/{id}', [ProductController::class , 'delete'])->name('delete-pro/');

// Auth
Route::get('/login', [AuthController::class , 'login'])->name('login');
Route::get('/register', [AuthController::class , 'register'])->name('register');
Route::post('/store-user', [AuthController::class , 'store'])->name('store-user');
Route::post('/store-login', [AuthController::class , 'loginstore'])->name('store-login');
Route::get('/home', [HomeController::class , 'home'])->name('home');
Route::get('/logout', [AuthController::class , 'logout'])->name('logout');
