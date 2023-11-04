<?php
namespace App\Http\Controllers;

use Inertia\Inertia;

use App\Models\Article;
use App\Models\Tag;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        $articles = Article::with('tags')->get();
        return Inertia::render('cafedusud/Articles', compact('articles', 'tags'));
    }

    public function indexblog()
    {
        $tags = Tag::all();
        $articles = Article::with('tags')
        ->Blog()
        ->get();
        return Inertia::render('cafedusud/Blog', compact('articles', 'tags'));
    }

    public function indexNextThreeEvents()
    {
        $tags = Tag::all();
        $articles = Article::with('tags')
            ->nextThreeEvents()
            ->get();

        // dd($articles);

        return Inertia::render('Welcome', [
            'articles' => $articles,
            'tags' => $tags,
        ]);
    }

    public function indexNextEvents()
    {
        $tags = Tag::all();
        $articles = Article::with('tags')
            ->nextEvents()
            ->get();

        return Inertia::render('cafedusud/Calendrier', [
            'articles' => $articles,
            'tags' => $tags,
        ]);
    }

    public function show(Article $article)
    {
        $tags = Tag::all();
        $articles = Article::with('tags');

        return Inertia::render('cafedusud/ArticleDetails', compact('article'));
    }

    public function destroy(Article $article)
    {
        if ($article->delete()) {
            session()->flash('flash.banner', 'Article supprimé avec succès');
            session()->flash('flash.bannerStyle', 'success');
        } else {
            session()->flash('flash.banner', "Une erreur s'est produite lors de la suppression");
            session()->flash('flash.bannerStyle', 'danger');
        }
    }

    public function store(Request $request)
    {
        $valid_data = Validator::make($request->all(), [
            'titre' => ['required', 'min:10', 'max:70'],
            'contenu' => ['required', 'min:100'],
            'type' => ['required',],
            'url' => ['nullable',],
            'date_debut' => ['nullable', 'date', 'after:now'],
            'date_fin' => ['nullable', 'date',  'after:date_debut'],
            'statut' => ['required',],
            'tags' => ['nullable',],
        ])->validate();

        $valid_data['date_publication'] = now();

        $article = Article::create($valid_data);
        $article->tags()->sync($request->input('tags'));

        session()->flash('flash.banner', 'Article créé avec succès');
        session()->flash('flash.bannerStyle', 'success');
    }

    public function update(Request $request, Article $article)
    {
        $valid_data = Validator::make($request->all(), [
            'titre' => ['required',],
            'contenu' => ['required',],
            'type' => ['required',],
            'url' => ['nullable',],
            'date_publication' => ['nullable', 'date',],
            'date_debut' => ['nullable', 'date', 'after:now'],
            'date_fin' => ['nullable', 'date',  'after:date_debut'],
            'statut' => ['required',],
            'tags' => ['nullable',],
        ])->validate();

        $article->update($valid_data);
        $article->tags()->sync($request->input('tags'));

        session()->flash('flash.banner', 'Article modifié avec succès');
        session()->flash('flash.bannerStyle', 'success');
    }
}
