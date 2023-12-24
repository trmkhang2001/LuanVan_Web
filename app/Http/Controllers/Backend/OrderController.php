<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }
    public function details(string $id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orders.details', compact('order'));
    }
}
