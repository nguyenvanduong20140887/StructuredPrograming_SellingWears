<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class TestController extends Controller {
	public function test() {
		$users = Product::find(1)->orderlines;
		// foreach ($users as $key => $value) {
		// 	echo $value;
		// }
		dd($users);
	}

	public function search(Request $request) {
		dd($request);
	}
}
