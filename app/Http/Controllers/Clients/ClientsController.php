<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

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
}
