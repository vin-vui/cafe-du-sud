<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Tag;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return Inertia::render('App/Tags', compact('tags'));
    }
    public function destroy(Tag $tag)
    {
        if ($tag->delete()) {
            session()->flash('flash.banner', 'Tag supprimé avec succès');
            session()->flash('flash.bannerStyle', 'success');
        } else {
            session()->flash('flash.banner', "Une erreur s'est produite lors de la suppression");
            session()->flash('flash.bannerStyle', 'danger');
        }
    }
    public function store(Request $request)
    {
        $valid_data = Validator::make($request->all(), [
            'name' => ['required',],
            'description' => ['required'],
        ])->validate();

        Tag::create($valid_data);
        session()->flash('flash.banner', 'Tag créé avec succès');
        session()->flash('flash.bannerStyle', 'success');
    }
    public function update(Request $request, Tag $tag)
    {
        $valid_data = Validator::make($request->all(), [
            'name' => ['required',],
            'description' => ['required'],
        ])->validate();

        $tag->update($valid_data);

        session()->flash('flash.banner', 'Tag modifié avec succès');
        session()->flash('flash.bannerStyle', 'success');
    }
}
