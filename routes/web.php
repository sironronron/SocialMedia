<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PageController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/newsfeed', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/messages', [PageController::class, 'messages'])->name('messages');
Route::get('/notifications', [PageController::class, 'notifications'])->name('notifications');
Route::get('/find-friends', [PageController::class, 'find_friends'])->name('find-friends');
Route::get('/profile/{public_id}', [PageController::class, 'show_profile'])->name('show-profile');
