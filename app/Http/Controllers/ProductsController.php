<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
echo $request->page;
        return $this->getViewsOfProducts($request->page);
    }

    public function getViewsOfProducts($category)
    {
        $results = Product::where('category', $category)->orderBy('id', 'desc')->get();
        return view('products.index', compact('results'));

    }
}
