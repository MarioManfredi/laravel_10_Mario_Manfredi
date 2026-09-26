<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function create(){

        return view('article/create');
    }

    public function store(ArticleRequest $request){

        $img = null;
        if($request->file('img')){
            $img = $request->file('img')->store('img', 'public');
        }

        Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'img' => $img
        ]);

        return redirect()->back()->with('message', 'Articolo creato correttamente');
    }

    public function index(){

        $articles = Article::all();
        return view('article/index', ['articles'=>$articles]);
    }
}
