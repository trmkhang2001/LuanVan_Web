<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }
    public function search(Request $request)
    {
        $items = Order::where('sku', 'LIKE', '%' . $request->search . '%')->orwhere('name', 'LIKE', '%' . $request->search . '%')->orwhere('phone', 'LIKE', '%' . $request->search . '%')->paginate(5);
        return view('admin.product.index', compact('items'));
    }
    public function details(string $id)
    {
        $order = Order::with('orderItems')->findOrFail($id);
        $products = [];
        foreach ($order->orderItems as $item) {
            $product = Product::findOrFail($item->product_id);
            $product->quantity = $item->quantity;
            $product->price = $item->price;
            $products[] = $product;
        }
        return view('admin.orders.details', compact('order', 'products'));
    }
}
