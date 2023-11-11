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

    public function store(Request $request){
        $valid_data = Validator::make($request->all(), [
            'surname' => ['required', 'max:25'],
            'name' => ['required', 'max:25'],
            'email' => ['required', 'max:25', 'email'],
            'phone' => ['required', 'max:25', 'integer'],
            'content' => ['required',],
        ])->validate();

        Message::create($valid_data);
        session()->flash('flash.banner', 'Votre message a bien été envoyé !');
        session()->flash('flash.bannerStyle', 'success');
    }
}
