<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Newsletter;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function index(){
        $newsletters = Newsletter::all();
        return Inertia::render('cafedusud/Newsletters', compact('newsletters'));
    }

    public function destroy(Newsletter $newsletter){
        if ($newsletter->delete()) {
            session()->flash('flash.banner', 'Email supprimé avec succès');
            session()->flash('flash.bannerStyle', 'success');
        } else {
            session()->flash('flash.banner', "Une erreur s'est produite lors de la suppression");
            session()->flash('flash.bannerStyle', 'danger');
        }
    }

    public function store(Request $request){
        $valid_data = Validator::make($request->all(), [
            'email' => ['required', 'email'],
        ])->validate();

        Newsletter::create($valid_data);
        session()->flash('flash.banner', 'Félicitations ! Votre email a bien été ajouté à la newsletter');
        session()->flash('flash.bannerStyle', 'success');
    }
}
