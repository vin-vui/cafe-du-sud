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
        return Inertia::render('cafedusud/articles', compact('articles'));
    }
}
