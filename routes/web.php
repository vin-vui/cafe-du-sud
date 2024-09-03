<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\GuestController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\MessageController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [ArticleController::class, 'index'])->name('dashboard');
    Route::resource("articles", ArticleController::class);
    Route::resource("tags", TagController::class);
    Route::resource("comments", CommentController::class);
    Route::resource("newsletters", NewsletterController::class)->only(['index', 'destroy']);
    Route::resource("messages", MessageController::class);
});

Route::get("/",                             [GuestController::class, 'home'])   ->name('home');
Route::get('/tous-les-billets',             [GuestController::class, 'posts'])  ->name('posts');
Route::get('/billet/{article:slug}',        [GuestController::class, 'show'])   ->name('post.show');
Route::get('/tous-les-événements',          [GuestController::class, 'events']) ->name('events');
Route::get('/événements/{article:slug}',    [GuestController::class, 'show'])   ->name('event.show');
Route::get('/contactez-nous', function () {
    return Inertia::render('Guest/Contact');
})->name('contact');
Route::resource("newsletters", NewsletterController::class)->only(['store']);
