<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\controllers\GuestController;
use App\Http\controllers\ArticleController;
use App\Http\controllers\TagController;
use App\Http\controllers\CommentController;
use App\Http\controllers\NewsletterController;
use App\Http\controllers\MessageController;

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
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::resource("articles", ArticleController::class);
    Route::resource("tags", TagController::class);
    Route::resource("comments", CommentController::class);
    Route::resource("newsletters", NewsletterController::class);
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
