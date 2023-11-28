<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function OrderNew()
    {
        return view('ordersNew');
    }
    public function OrderDeny()
    {
        return view('ordersDeny');
    }
    public function OrderAccept()
    {
        return view('ordersAccept');
    }
    public function Authors()
    {
        return view('Authors');
    }
}
