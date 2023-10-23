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
}
