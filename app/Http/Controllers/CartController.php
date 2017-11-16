<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Cart;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
	 * Add product to Cart
	 * @param product ID
	 * @return Cart page
	 */
	public function addToCart($prod_id){
		$product = Product::find($prod_id);
		//Is current session empty?
        $oldCart = Session('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product);
        Session::put('cart',$cart);
        return redirect()->route('cart');
	}

    /**
     * delete products from cart
     * @param  product ID
     * @return Cart page
     */
	public function deleteFromCart($prod_id){
        $oldCart= Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($prod_id);
        if(count($cart->items)>0)
        {
            Session::put('cart',$cart);
        }
        else
        {
            Session::forget('cart',$cart);
        }
        return redirect()->back();
	}

    /**
     * Proceed To Checkout
     * @return echo
     */
	public function proceedToCheckout(){
		echo "da thanh toan";
	}
}