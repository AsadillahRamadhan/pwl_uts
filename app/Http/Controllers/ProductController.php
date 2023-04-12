<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    function index(){
        $products = Product::latest()->filter(request(['q']))->paginate(20)->withQueryString();
        return view('content.products.index', [
            'content' => 'Products',
            'title' => 'Products',
            'products' => $products
        ]);
    }

    function create(){
        return view('content.products.form', [
            'url_form' => url('/products'),
            'title' => 'Create Products',
            'content' => 'Products'
        ]);
    }

    function store(){

    }

    function edit(){

    }

    function update(){

    }

    function destroy(){

    }
}
