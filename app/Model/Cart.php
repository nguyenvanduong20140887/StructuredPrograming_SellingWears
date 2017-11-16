<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    /**
     * Add product to Cart
     * @param Product
     */
    public function add($product){
        $cart = ['qty'=>0,'price' => 0, 'product' => $product];
    	if($this->items){
            if(array_key_exists($product->prod_id, $this->items)){
        		$cart = $this->items[$product->prod_id];
            }
        }
        $cart['qty']++;
        $cart['price'] += $product->price;
        $this->items[$product->prod_id] = $cart;
        $this->totalQty++;
        $this->totalPrice += $product->price;
    }

    /**
     * delete product from Cart
     * @param product ID
     */
    public function removeItem($id){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
