<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {   
        $categories = Category::get();
        $products = Product::orderBy('id', 'desc')
            ->with('category')
            ->when($request->category, function ($query) use ($request) {
                $query->where('category', $request->category);
            })->get();
        // dd($products);
        return view('products_search', compact('products','request','categories'));
    }
}