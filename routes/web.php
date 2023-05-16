<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentbookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {return view('welcome');})->name('dashboard');

// Route FrontEnd
Route::get('main', function () {return view('layouts.main');});
Route::get('main', function () {return view('layouts.main');});


//route register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerAccount'])->name('registerAccount');

//route login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'auth'])->name('auth');

// pesan
Route::post('/store', [RentbookController::class, 'storePesan'])->name('store');
Route::get('/pesan', [RentbookController::class, 'pesan'])->name('pesan');

// logout
Route::get('logout', [AuthController::class, 'logout']);

Route::middleware(['admin:1'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard.index');});
    Route::get('/users', [AdminController::class, 'indexUsers']);
    // Route::get('/book', [AdminController::class, 'book']);
    Route::get('/book', [AdminController::class, 'book'])->name('book'); 
    Route::post('/add', [AdminController::class, 'add'])->name('add');
    Route::get('/category', function () {return view('dashboard.category');});
    Route::get('/rent-log', function () {return view('dashboard.rent-log');});
    Route::get('/pesans', [AdminController::class, 'pesans']);

    // route delete user
    Route::post('/delete/{id}',  [AdminController::class, 'destroy'])->name('delete');

    // route delete buku
    Route::get('/delete/{id}',  [RentbookController::class, 'destroy'])->name('delete');

    // route edeit user
    Route::get('/editUsers{id}', [AdminController::class, 'editUsers'])->name('editUsers');
    Route::patch('/edit/update{id}', [AdminController::class, 'update'])->name('update');  
 
    // edit buku
    Route::get('/editBooks/{id}', [RentBookController::class, 'editBooks'])->name('editBooks');
    Route::patch('/edit/update/{id}', [RentBookController::class, 'update'])->name('update');    
});
    

Route::get('/dashboard-user', [UserController::class, 'index']);


