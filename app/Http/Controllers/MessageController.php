<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Message;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::all();
        return Inertia::render('cafedusud/Messages', compact('messages'));
    }

    // public function store(Request $request){
    //     $valid_data = Validator::make($request->all(), [
    //         'email' => ['required', 'email'],
    //     ])->validate();

    //     Newsletter::create($valid_data);
    //     session()->flash('flash.banner', 'Félicitations ! Votre email a bien été ajouté à la newsletter');
    //     session()->flash('flash.bannerStyle', 'success');
    // }
}
