<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('home');
});
Route::get('about',function () {
    return view('about');
});
Route::get('faq',function () {
    return view('faq');
});
Route::get('lore',function () {
    return view('lore');
});
Route::get('schedule',function () {
    return view('schedule');
});
Route::get('forum',function () {
    return view('forum');
});
Route::get('members',function  () {
    return view('members');
});
Route::get('contact',function () {
    return view('contact');
});
Route::get('profile', function () {
    return view('user.profile');
})->middleware('auth');

Route::get('editprofile', function () {
    return view('user.edit');
})->middleware('auth');

Route::post('updateprofile', UserController@updateprofile () {
    return view('user.update');
})->middleware('auth');

Route::get('members/{$user->username}', function ($username) {
    return view('publicprofile');
});





Route::resource('members', UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
