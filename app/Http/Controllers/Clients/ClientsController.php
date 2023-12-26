<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\User;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{
    //   
    public function index()
    {
        $items = Product::paginate(6);
        return view('clients.pages.home', ['items' => $items]);
    }
    public function page_product(Request $request)
    {
        $categorys = Category::with('product')->get();
        $promotions = Promotion::with('product')->get();
        $prange = $request->query("prange");
        if (!$prange)
            $prange = "5000000,50000000";
        $from  = explode(",", $prange)[0];
        $to  = explode(",", $prange)[1];
        $q_categories = $request->query("categories");
        if ($q_categories) {
            $items = Product::where('category_id', explode(',', $q_categories))->whereBetween('price', array($from, $to))->paginate(10);
        } else {
            $items = Product::whereBetween('price', array($from, $to))->whereBetween('price', array($from, $to))->paginate(10);
        }
        return view('clients.pages.shop', ['items' => $items, 'categorys' => $categorys, 'promotions' => $promotions, 'q_categories' => $q_categories, 'from' => $from, 'to' => $to]);
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
    public function checkOut()
    {
        $cartItems = Cart::instance('cart')->content();
        return view('clients.pages.checkout', ['cartItems' => $cartItems]);
    }
    public function order(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'province' => 'required',
            'district' => 'required',
            'ward' => 'required',
        ]);
        $carts = Cart::instance('cart')->content();
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart->price;
        }
        if (Auth::check()) {
            $order = Order::create([
                'user_id' => Auth::user()->id,
                'total' => $total,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'ward' => $request->ward,
                'district' => $request->district,
                'province' => $request->province,
                'address' => $request->address,
                'status' => config('app.order_status.ORDER'),
            ]);
            if ($order) {
                foreach ($carts as $cart) {
                    OrderItem::create([
                        'product_id' => $cart->id,
                        'order_id' => $order->id,
                        'price' => $cart->price,
                        'quantity' => $cart->qty,
                    ]);
                }
                $this->clearCart();
            }
            return redirect()->route('client.page.cart');
        }
    }
}
