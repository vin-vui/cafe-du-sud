<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Models\Article;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Newsletter;
use App\Models\Message;

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
});

Route::get('/blog', [ArticleController::class, 'indexBlog'])->name('blog');

Route::get('/article/{article}', [ArticleController::class, 'show']);

Route::get('/calendrier', [ArticleController::class, 'indexNextEvents'])->name('calendrier');


Route::get('/contact', function () {
    return Inertia::render('cafedusud/Contact');
})->name('contact');

Route::resource("articles", ArticleController::class);
Route::resource("tags", TagController::class);
Route::resource("comments", CommentController::class);
Route::resource("newsletters", NewsletterController::class);
Route::resource("messages", MessageController::class);

Route::get("/", [ArticleController::class, 'indexNextThreeEvents'])->name('accueil');

