<?php

namespace App\Http\Controllers;

use App\Album;
use App\Article;
use App\Download;
use App\Message;
use Illuminate\Http\Request;
use Storage;

class StaticPagesController extends Controller
{
    public function home()
    {
        $results = Article::orderBy('created_at', 'desc')->take(5)->get();
        return view('static.home', compact('results'));
    }

    public function news()
    {
        return view('static.news');
    }

    public function company()
    {
        return view('static.company');
    }

    public function album()
    {
        $results = Album::orderBy('id', 'desc')->paginate(12);
        return view('static.album', compact('results'));
    }

    public function download()
    {
        $results = Download::orderBy('id','desc')->paginate(10);
        return view('static.download',compact('results'));
    }


    public function message()
    {
        return view('static.message');
    }

    public function messages_upload(Request $request)
    {
        $message = new Message;
        $message->title = $request->input('titleInput');
        $message->name = $request->input('nameInput');
        $message->email = $request->input('emailInput');
        $message->address = $request->input('addressInput');
        $message->content = $request->input('textInput');
        $message->save();
        return redirect('/message');
    }

    public function contact()
    {
        return view('static.contact');
    }
}
