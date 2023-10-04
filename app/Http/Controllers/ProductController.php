<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function listProducts(){
        return view("products");
    }

    public function detalle(){
        return view('products.detail');
    }
}
