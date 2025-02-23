<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

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
    $totalPrice = Cart::where("user_id", $id)->sum("price");
    // dd($totalPrice);
        $cartsInfos = [];
        foreach ($carts as $cart) {
            $productName  = Product::find($cart->product_id)->product_name;
            $productPic   = Product::find($cart->product_id)->image_url;
            $size         = $cart->cup_size;
            $sugar        = $cart->sugar_level;
            $quantity     = $cart->quantity;
            $price        = $cart->price;
            $cartsInfos[] = [
                'cartId'      => $cart->id,
                'productName' => $productName,
                'productPic'  => $productPic,
                'size'        => $size,
                'sugar'       => $sugar,
                'quantity'    => $quantity,
                'price'       => $price,
            ];
        }
        // dd($cartsInfos);
        $cartsInfos = collect($cartsInfos);
        // dd($cartsInfos);

        return view("member.shoppingcarts", compact("cartsInfos", "totalPrice"));
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
    public function update(Request $request)
    {
        $cart = Cart::find($request->cartId);
        // dd($cart);
        $product = Product::find($cart->product_id);
        // dd($product);
        $originalPrice = $product->price;

        // 如果是更改大小杯
        if ($request->cup_size) {
            if ($request->cup_size == 3) {
                $newPrice = $originalPrice;
            } else if ($request->cup_size == 2) {
                $newPrice = $originalPrice + 10;
            } else {
                $newPrice = $originalPrice + 30;
            }
            // 根據數量計算總價
            $newPrice = $newPrice * $cart->quantity;
            $cart->update([
                'cup_size' => $request->cup_size,
                'price'    => $newPrice,
            ]);
        }
        //如果是更改數量
        if ($request->quantity) {
            if ($cart->cup_size == 3) {
                $price = $originalPrice;
            } else if ($cart->cup_size == 2) {
                $price = $originalPrice + 10;
            } else {
                $price = $originalPrice + 30;
            }
            $newPrice = $price * $request->quantity;
            $cart->update([
                'quantity' => $request->quantity,
                'price'    => $newPrice]);
        }

        if ($request->sugar_level) {
            $cart->update([
                'sugar_level' => $request->sugar_level,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => '購物車更新成功',
        ]);
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
                'message' => '請先登入',
            ]);
        }
        // dd($productData);
        try {
            Cart::create($productData);
            return response()->json([
                'success' => true,
                'message' => '購物車新增成功',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => '購物車新增失敗',
                'error'   => $e->getMessage(),
            ]);
        }
    }
}
