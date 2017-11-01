<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';

    public function orderlines(){
    	return $this->hasMany('App\Model\Orderline', 'order_id');
    }
}
