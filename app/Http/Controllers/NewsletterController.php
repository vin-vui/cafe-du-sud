<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Newsletter;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletters = Newsletter::orderBy('email')->get();
        return Inertia::render('App/Newsletters', compact('newsletters'));
    }

    public function destroy(Newsletter $newsletter)
    {
        if ($newsletter->delete()) {
            session()->flash('flash.banner', 'Abonné retiré avec succès');
            session()->flash('flash.bannerStyle', 'success');
        } else {
            session()->flash('flash.banner', "Une erreur s'est produite lors de la suppression");
            session()->flash('flash.bannerStyle', 'danger');
        }
    }

    public function store(Request $request)
    {
        $valid_data = Validator::make($request->all(), [
            'email' => ['required', 'email'],
        ])->validate();

        Newsletter::create($valid_data);
        session()->flash('flash.banner', 'Félicitations ! Votre abonnement a bien été pris en compte');
        session()->flash('flash.bannerStyle', 'success');
    }
}
