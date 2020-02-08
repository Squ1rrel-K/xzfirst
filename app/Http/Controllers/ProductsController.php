<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use LaraMall\Markdown\Markdown;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $results = Product::where('category', $request->page)->orderBy('id', 'desc')->paginate(12);
        return view('products.index', compact('results'));
    }

    public function show(Product $product)
    {
        $result = Product::find($product->id);
        $markdown = new Markdown();
        $result->content = $markdown->driver('extra')->html($markdown = $result->content);
        return view('products.show',compact('result'));

    }

    public function getViewsOfProducts($category)
    {


    }
}
