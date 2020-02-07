<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    function index()
    {
        $articles = Article::orderBy('id','desc')->paginate(5);
        return view('articles.index', compact('articles'));
    }

    function show(Article $article){
        $result = Article::find($article->id);
        return view('articles.show',compact('result'));
    }

}
