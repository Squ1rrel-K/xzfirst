<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use LaraMall\Markdown\Markdown;

class ArticlesController extends Controller
{
    function index()
    {
        $articles = Article::orderBy('id', 'desc')->paginate(5);
        return view('articles.index', compact('articles'));
    }

    function show(Article $article)
    {
        $result = Article::find($article->id);
        $markdown = new Markdown();
        $result->content = $markdown->driver('extra')->html($markdown = $result->content);
        return view('articles.show', compact('result'));
    }

}
