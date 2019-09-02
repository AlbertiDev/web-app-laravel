<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class MainController extends Controller
{
    function getHomePage() {
    	$products = Product::all();
    	return view('content.home',compact('products'));
    }
    function getDetailsPage($id)
    {
    	$product = Product::find($id);
        $category = Category::all();
    	return view('content.details',compact('product','category'));
    }
}
