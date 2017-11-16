<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Model\Orderline;
use Model\Product;
use Model\Cart;
use Session;

class OrderController extends Controller
{
    public function order()
    {
        return view('customers.order');
    }
}
