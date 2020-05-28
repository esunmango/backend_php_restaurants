<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return "This is the form to create a product";
    }

    public function store()
    {
        //
    }

    public function show($product)
    {
        return view('products.show');
    }

    public function edit($product)
    {
        return "Edit product {$product}";
    }

    public function update($product)
    {
        //
    }

    public function destroy($product)
    {
        //
    }
}
