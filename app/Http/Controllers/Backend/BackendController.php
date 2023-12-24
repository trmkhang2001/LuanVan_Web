<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public renderToView($layout,$data){
        return view('admin.index'.$layout ,compact($data));
    }
}
