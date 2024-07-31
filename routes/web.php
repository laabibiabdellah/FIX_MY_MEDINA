<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminCityController;
use App\Http\Controllers\AdminCompanyController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPrefectureController;
use App\Http\Controllers\MyPostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::resource('post', PostController::class);

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('register', RegisterController::class)->middleware('guestcheck');
Route::resource('dashboard', AdminDashboardController::class)->middleware('authcheck');
Route::resource('dashboard-users', AdminUsersController::class)->middleware('authcheck');
Route::resource('dashboard-posts', AdminPostController::class)->middleware('authcheck');
Route::resource('dashboard-cities', AdminCityController::class)->middleware('authcheck');
Route::resource('dashboard-companies', AdminCompanyController::class)->middleware('authcheck');
Route::resource('dashboard-prefectures', AdminPrefectureController::class)->middleware('authcheck');

Route::resource('settings', UserController::class)->middleware('authcheck');



Route::resource('my-posts', MyPostsController::class);

Route::get('login', [LoginController::class, 'login'])
    ->name('login')->middleware('guestcheck');
Route::post('login', [LoginController::class, 'handle'])->name('handle')
    ->middleware('guestcheck');
Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('authcheck');



Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::get('/dashboard/settings', function () {
    return view('admin.settings');
})->name('settings')->middleware('authcheck');

Route::fallback(function () {
    return view('not-found');
});
