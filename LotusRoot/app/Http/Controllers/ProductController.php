<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Model
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        return view('product.products', compact('products'));
    }

    public function create()
    {
        return view('upload_product');
    }


}
