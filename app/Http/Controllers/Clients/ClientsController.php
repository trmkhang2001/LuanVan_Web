<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class ClientsController extends Controller
{
    //   
    public function index()
    {
        $items = Product::paginate(6);
        return view('clients.pages.home', ['items' => $items]);
    }
    public function page_product()
    {
        $items = Product::paginate(10);
        return view('clients.pages.shop', ['items' => $items]);
    }
    public function detail(String $id)
    {
        $product = Product::with('category')->find($id);
        return view('clients.pages.detail_product', ['product' => $product]);
    }
    public function cart()
    {
        $cartItems = Cart::instance('cart')->content();
        // var_dump($cartItems);
        return view('clients.pages.cart', ['cartItems' => $cartItems]);
    }
    public function addToCart(Request $request)
    {
        $product = Product::find($request->id);
        $price = $product->price;
        Cart::instance('cart')->add($product->id, $product->name, $request->quantity, $price)->associate(Product::class);
        return redirect()->back()->with('message', 'Thêm giỏ hàng thành công');
    }
    public function updateCart(Request $request)
    {
        Cart::instance('cart')->update($request->rowId, $request->quantity);
        return redirect()->route('client.page.cart');
    }
    public function removeItem(Request $request)
    {
        $rowId = $request->rowId;
        Cart::instance('cart')->remove($rowId);
        return redirect()->route('client.page.cart');
    }
    public function clearCart()
    {
        Cart::instance('cart')->destroy();
        return redirect()->route('client.page.cart');
    }
}
