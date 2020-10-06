<?php

namespace App\Http\Controllers;

use App\Products;

use Illuminate\Http\Request;

class ProductController extends Controller
{
	    public function index()
    {
    	return Products::get();
    }



    public function create()
    {
    	return view("products.products");
    }



    public function store(Request $request)
    {
    	Products::create([
    		"title"=>$request->input("title"),
    		"text"=>$request->input("text"),
    		"short_description"=>$request->input("text"),
    	]);
    }
}