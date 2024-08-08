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

        return Inertia::render('App/Articles', compact('articles', 'tags'));
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
            'title' => ['required', 'min:10', 'max:70'],
            'content' => ['required', 'min:100'],
            'type' => ['required',],
            'url' => ['nullable',],
            'begin_date' => ['nullable', 'date', 'after:now'],
            'end_date' => ['nullable', 'date',  'after:begin_date'],
            'status' => ['required',],
            'tags' => ['nullable',],
        ])->validate();

        $valid_data['publication_date'] = now();

        $article = Article::create($valid_data);
        $article->tags()->sync($request->input('tags'));

        session()->flash('flash.banner', 'Article créé avec succès');
        session()->flash('flash.bannerStyle', 'success');
    }

    public function update(Request $request, Article $article)
    {
        $valid_data = Validator::make($request->all(), [
            'title' => ['required',],
            'content' => ['required',],
            'type' => ['required',],
            'url' => ['nullable',],
            'date_publication' => ['nullable', 'date',],
            'begin_date' => ['nullable', 'date', 'after:now'],
            'end_date' => ['nullable', 'date',  'after:begin_date'],
            'status' => ['required',],
            'tags' => ['nullable',],
        ])->validate();

        $article->update($valid_data);
        $article->tags()->sync($request->input('tags'));

        session()->flash('flash.banner', 'Article modifié avec succès');
        session()->flash('flash.bannerStyle', 'success');
    }
}
