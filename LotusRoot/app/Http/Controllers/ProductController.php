<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
//Model
use App\Models\Product;

class ProductController extends Controller
{
    public function indexForMainPage()
    {
        $products = Product::find(13);
        return view('index', compact('products'));
    }
    public function index()
    {
        $products = Product::paginate(5);
        return view('product.products', compact('products'));
    }

    public function create()
    {
        return view('upload_product');
    }

    public function store(Request $request)
    {
        

        $validator = Validator::make($request->all(), [
            'product_name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric|min:1',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|numeric|min:1',
            "has_sugar" => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }

        // 上傳圖片處理
        $path = null;
        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('products', 'public');
        }

        // 儲存到資料庫
        Product::create([
            'product_name' => $request->product_name,
            'description' => $request->description,
            'price' => $request->price,
            'image_url' => $path,
            'category_id' => $request->category_id,
            'has_sugar' => $request->has_sugar,
        ]);
    
        return redirect()->route('index')->with('success', '產品新增成功！');
    }


}
