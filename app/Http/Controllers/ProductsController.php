<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductsController extends Controller
{
    public function viewProducts(Request $req)
    {
        // $name = $req->input('name', ""); //bisa gini
        //atau
        $name = $req->query('name', '');
        $categories = Category::all();
        $category = $req->query('category_id', '');

        if($name == "" && $category == ""){
            $products = Product::all();
        }else if($name){
            $products = Product::where('name', 'LIKE', '%' . $name . '%')->get();
        }else if($category){
            $products = Product::where('category_id', 'LIKE', $category)->get();
        }
        return view('viewProducts', compact('products', 'categories'));
    }

}
