<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
// TODO:建立刪除購物車功能
// TODO:建立更新購物車功能(例如改變規格或數量)
// TODO:建立購物車結帳功能
// TODO:建立購物車清空功能
// TODO:按下購物後生成訂單
// TODO:訂單生成後清空購物車
// TODO:計算總金額前端顯示

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        // dd($id);
        $carts = Cart::where("user_id", $id)->get();
        // dd($carts); 
        // $products = [];
        // foreach ($carts as $cart) {
        //     $products[] = Product::find($cart->product_id)->get("product_name");
        // }
        $cartsInfos = [];
        foreach ($carts as $cart) {
            $productName = Product::find($cart->product_id)->product_name;
            $productPic = Product::find($cart->product_id)->image_url;
            $size = $cart->cup_size;
            $sugar = $cart->sugar_level;
            $quantity = $cart->quantity;
            $price = $cart->price;
            $cartsInfos[] = [
                'cartId' => $cart->id,
                'productName' => $productName,
                'productPic' => $productPic,
                'size' => $size,
                'sugar' => $sugar,
                'quantity' => $quantity,
                'price' => $price,
            ];
        }
        // dd($cartsInfos);
        $cartsInfos = collect($cartsInfos);
        // dd($cartsInfos);
        
        return view("member.shoppingcarts", compact("cartsInfos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $carts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cartItem = Cart::find($id);
        // dd($cartItem);

        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['success' => true, 'message' => '商品已移除']);
        }
    
        return response()->json(['success' => false, 'message' => '找不到該商品']);
    }

    public function add(Request $request) 
    {
        $productData = $request->all();
        // dd($productData);

        //依照大小杯確認價格
        $product = Product::find($productData['product_id']);
        if ($productData['cup_size'] == 3) {
            $productData['price'] = $product->price;
        } else if ($productData['cup_size'] == 2) {
            $productData['price'] = $product->price + 10;
        } else {
            $productData['price'] = $product->price + 30;
        }

        //依照數量計算總價
        $productData['price'] = $productData['price'] * $productData['quantity'];


        // dd($productData);
        //確認是否登入
        if ($productData['user_id'] == 0) {
            return response()->json([
                'success' => false,
                'message' => '請先登入'
            ]);
        }
        dd($productData);

        try {
            Cart::create($productData);
            return response()->json([
                'success' => true,
                'message' => '購物車新增成功'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => '購物車新增失敗',
                'error' => $e->getMessage(),
            ]);
        }
    }
}
