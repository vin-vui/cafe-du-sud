<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Article;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return Inertia::render('cafedusud/Articles', compact('articles'));
    }

    public function show(){
        return Inertia::render('cafedusud/Article');
    }

    public function destroy(Article $article){
        if ($article->delete()) {
            session()->flash('flash.banner', 'Article supprimé avec succès');
        } else {
            session()->flash('flash.banner', "Une erreur s'est produite lors de la suppression");
        }
    }

    public function store(Request $request){
        $valid_data = Validator::make($request->all(), [
            'titre' => ['required'],
            'contenu' => ['required'],
            'type' => ['required'],
            'url' => ['nullable'],
            'date_publication' => ['nullable'],
            'date_debut' => ['nullable',],
            'date_fin' => ['nullable',],
            'statut' => ['required',],
        ])->validate();

        Article::create($valid_data);
        session()->flash('flash.banner', 'Article créée avec succès');
    }

    public function update(Request $request, Article $article){
        $valid_data = Validator::make($request->all(), [
            'titre' => ['required'],
            'contenu' => ['required'],
            'type' => ['required'],
            'url' => ['nullable'],
            'date_publication' => ['nullable'],
            'date_debut' => ['nullable',],
            'date_fin' => ['nullable',],
            'statut' => ['required',],
        ])->validate();

        $article->update($valid_data);

        session()->flash('flash.banner', 'Article modifié avec succès');
    }


}
