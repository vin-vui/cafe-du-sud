<?php
namespace App\Http\Controllers;

use Inertia\Inertia;

use App\Models\Article;
use App\Models\Tag;

class GuestController extends Controller
{

    public function home()
    {
        $tags = Tag::all();
        $articles = Article::with('tags')->nextThreeEvents()->get();

        return Inertia::render('Guest/Welcome', compact('articles', 'tags'));
    }

    public function posts()
    {
        $tags = Tag::all();
        $articles = Article::with('tags')->post()->get();

        return Inertia::render('Guest/Posts', compact('articles', 'tags'));
    }

    public function events()
    {
        $tags = Tag::all();
        $articles = Article::with('tags')->nextEvents()->get();

        return Inertia::render('Guest/Events', compact('articles', 'tags'));
    }

    public function show(Article $article)
    {
        return Inertia::render('Guest/Article', compact('article'));
    }
}
