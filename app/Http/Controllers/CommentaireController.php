<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Commentaire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentaireController extends Controller
{
    public function index(){
        $commentaires = Commentaire::all();
        return Inertia::render('cafedusud/Commentaires', compact('commentaires'));
    }

    public function show(){
        return Inertia::render('cafedusud/Commentaire');
    }

    public function destroy(Commentaire $commentaire){
        if ($commentaire->delete()) {
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

        Commentaire::create($valid_data);
        session()->flash('flash.banner', 'Article créé avec succès');
        session()->flash('flash.bannerStyle', 'success');
    }

    public function update(Request $request, Commentaire $commentaire){
        $valid_data = Validator::make($request->all(), [
            'pseudo' => ['required', 'max:47'],
            'statut' => ['required',],
            'date_publication' => ['nullable'],
            'contenu' => ['required'],
        ])->validate();

        $commentaire->update($valid_data);

        session()->flash('flash.banner', 'Commentaire modifié avec succès');
        session()->flash('flash.bannerStyle', 'success');
    }
}
