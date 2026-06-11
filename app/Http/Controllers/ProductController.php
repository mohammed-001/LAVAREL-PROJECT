<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        return view('products');
    }

    public function show($id)
    {
        return view('product-details');
    }
}