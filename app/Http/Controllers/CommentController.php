<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return Inertia::render('cafedusud/Comments', compact('comments'));
    }

    public function show(){
        return Inertia::render('cafedusud/Comment');
    }

    public function destroy(Comment $comment){
        if ($comment->delete()) {
            session()->flash('flash.banner', 'Commentaire supprimé avec succès');
            session()->flash('flash.bannerStyle', 'success');
        } else {
            session()->flash('flash.banner', "Une erreur s'est produite lors de la suppression");
            session()->flash('flash.bannerStyle', 'danger');
        }
    }

    public function store(Request $request){
        $valid_data = Validator::make($request->all(), [
            'pseudo' => ['required', 'max:47'],
            'statut' => ['required',],
            'date_publication' => ['nullable'],
            'contenu' => ['required'],
            'date' => now,
        ])->validate();

        Comment::create($valid_data);
        session()->flash('flash.banner', 'Article créé avec succès');
        session()->flash('flash.bannerStyle', 'success');
    }

    public function update(Request $request, Comment $comment){
        $valid_data = Validator::make($request->all(), [
            'pseudo' => ['required', 'max:47'],
            'statut' => ['required',],
            'date_publication' => ['nullable'],
            'contenu' => ['required'],
        ])->validate();

        $comment->update($valid_data);

        session()->flash('flash.banner', 'Commentaire modifié avec succès');
        session()->flash('flash.bannerStyle', 'success');
    }
}
