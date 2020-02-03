<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('static.home');
    }

    public function news()
    {
        return view('static.news');
    }

    public function company()
    {
        return view('static.company');
    }

    public function products(Request $request)
    {
        $page = $request->input('page');

        switch ($page) {
            case 'p1':
                $name = '电力仪器';
                break;
            case 'p2':
                $name = '电动汽车转换器';
                break;
            case 'p3':
                $name = '足浴桶控制器';
                break;
            case 'p4':
                $name = '铁路产品';
                break;
            case 'p5':
                $name = '单片机设计开发';
                break;

        }
        return view('products.default', ['name' => $name]);
    }

    public function album()
    {
        return view('static.album');
    }

    public function download()
    {
        return view('static.download');
    }

    public function message()
    {
        return view('static.message');
    }

    public function contact()
    {
        return view('static.contact');
    }
}
