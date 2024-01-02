<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ParameterProducts;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Supplier;
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
        $items = Product::orderBy('created_at', 'desc')->paginate(8);
        $suppliers = Supplier::all();
        return view('clients.pages.home', ['items' => $items, 'suppliers' => $suppliers]);
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
            $items = Product::orderBy('created_at', 'desc')->where('category_id', explode(',', $q_categories))->whereBetween('price', array($from, $to))->paginate(10);
        } else {
            $items = Product::orderBy('created_at', 'desc')->whereBetween('price', array($from, $to))->whereBetween('price', array($from, $to))->paginate(10);
        }
        return view('clients.pages.shop', ['items' => $items, 'categorys' => $categorys, 'promotions' => $promotions, 'q_categories' => $q_categories, 'from' => $from, 'to' => $to]);
    }
    public function about()
    {
        return view('clients.pages.about');
    }
    public function detail(String $id)
    {
        $product = Product::with('category')->find($id);
        $param = ParameterProducts::where('id_product', $id)->first();
        return view('clients.pages.detail_product', ['product' => $product, 'param' => $param]);
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
        $total = config('app.ship.PRICE');
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
    public function nopermision()
    {
        return view('clients.pages.norpermission');
    }
}
