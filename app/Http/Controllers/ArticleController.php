<?php
namespace App\Http\Controllers;

use Inertia\Inertia;

use App\Models\Article;
use App\Models\Tag;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index(){
        $tags = Tag::all();
        $articles = Article::with('tags')->get();
        return Inertia::render('cafedusud/Articles', compact('articles', 'tags'));
    }

    public function show(Article $article){
        $article->load('tags');
        // $article->load('tags', 'articles.tags');
        // $article->load('articles.tags');
        // $tags = Tag::all();
        // $article = Article::with('tags')->findOrFail($id);
        return Inertia::render('cafedusud/Article', compact('article'));
    }

    public function destroy(Article $article){
        if ($article->delete()) {
            session()->flash('flash.banner', 'Article supprimé avec succès');
            session()->flash('flash.bannerStyle', 'success');
        } else {
            session()->flash('flash.banner', "Une erreur s'est produite lors de la suppression");
            session()->flash('flash.bannerStyle', 'danger');
        }
    }

    public function store(Request $request){
        $valid_data = Validator::make($request->all(), [
            'titre' => ['required', 'max:47'],
            'contenu' => ['required'],
            'type' => ['required'],
            'url' => ['nullable'],
            'date_publication' => ['nullable'],
            'date_debut' => ['nullable',],
            'date_fin' => ['nullable',],
            'statut' => ['required',],
            'tags' => ['required'],
        ])->validate();

        dd($request->input('tags'));

        $article = Article::create($valid_data);
        $article->tags()->sync($request->input('tags'));

        session()->flash('flash.banner', 'Article créé avec succès');
        session()->flash('flash.bannerStyle', 'success');
    }

    public function update(Request $request, Article $article){
        $valid_data = Validator::make($request->all(), [
            'titre' => ['required', 'max:47'],
            'contenu' => ['required',],
            'type' => ['required',],
            'url' => ['nullable',],
            'date_publication' => ['nullable',],
            'date_debut' => ['nullable',],
            'date_fin' => ['nullable',],
            'statut' => ['required',],
            'tags' => ['nullable'],
        ])->validate();

        $article->update($valid_data);
        // $tagsToSync = array_filter($request->input('tags')); // Supprime les éléments vides du tableau

        // dd($tagsToSync);
        $article->tags()->sync($request->input('tags'));

        session()->flash('flash.banner', 'Article modifié avec succès');
        session()->flash('flash.bannerStyle', 'success');
    }
}
