<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Method show toàn bộ sản phẩm trong giỏ hàng.
    public function index()
    {
        return view("cart");
    }
    // Method thêm 1 sản phẩm vào giỏ hàng.
    public function addToCart($id)
    {
        $product = product::findOrFail($id); // lấy sản phẩm
        $cart = session()->get('cart',[]);

        if (isset($cart[$id]))
        {
            $cart[$id]['quantity']++;
            $x = $cart[$id]['product_price'] * $cart[$id]['quantity'];
        }
        else
        {
            $cart[$id] =
            [
                "product_name" => $product->product_name,
                "product_price" => $product->product_price,
                "product_image" => $product->product_image,
                "quantity" => 1,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('NotEmptyCart', 'Sản phẩm đã thêm vào giỏ hàng thành công');
    }
    // Method cập nhật sản phẩm trong giỏ hàng.
    public function updateCart()
    {

    }
    // Method xóa 1 sản phẩm trong giỏ hàng.
    public function removeCart($id)
    {
        session()->forget('cart.'.$id);
        return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng');
    }
    // Method xóa hết sản phẩm trong giỏ hàng.
    public function clearAllCart(Request $request)
    {
        $request->session()->forget('cart');

        return redirect()->back()->with('success', 'Đã xóa hết đơn hàng');
    }
}
