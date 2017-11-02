<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Model\Orderline;
use Model\Product;

class OrderController extends Controller
{
    public function order(Request $req)
    {
        return view('customers.order');
    }
}
