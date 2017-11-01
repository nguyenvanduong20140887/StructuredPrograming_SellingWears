<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Customer;
use App\Model\Order;
use App\Model\Orderline;
use App\Model\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
    	$users = Product::find(1)->orderlines;
    	// foreach ($users as $key => $value) {
    	// 	echo $value;
    	// }
    	dd($users);
    }
}
