<?php

use App\Models\post;
use App\Models\staff;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $staffs = staff::all();
    $posts = post::all();
    return view('welcome', ['staff' => $staffs, 'post' => $posts]);
})->name('landing');

// Auth::routes();
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'show']);
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/staff', function(){ return view('user'); })->name('aStaff');
Route::post('/new', [App\Http\Controllers\staffController::class, 'store'])->name('staff');
Route::get('/list', [App\Http\Controllers\staffController::class, 'index'])->name('staff_list');
Route::post('/new-post',[App\Http\Controllers\PostController::class, 'store'])->name('post');
Route::get('/post', function(){ return view('createPost'); })->name('newPost');
Route::get('/posts',[App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::get('del/{post}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('delPost');
Route::get('del-staff/{staff}', [\App\Http\Controllers\staffController::class, 'destroy'])->name('delStaff');
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
