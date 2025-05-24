<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // GET /Products/create
    public function create()
    {
        $categories = Category::pluck('name', 'id')->all();

        return view('products-create')->with('categories', $categories);
    }

    public function store(Request $request) 
    {

        $request->validate([
            'name' => 'required|unique:products|max:255'
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->save();

        // flash session meassage
        return redirect('/products/create')->with('message', 'Your product '. $request->name . ' was added');
    }
    public function showProductsByCategory($category = null){

        $categories = Category::all();

        $products = null;

        if($category){
            $category_id = $categories->firstWhere('name', $category)->id;

            $products = Product::where('category_id', $category_id)->get();

        }
    
            return view('products')
            ->with('products', $products)
            ->with('category', $category)
            ->with('categories', $categories);
    }
}
