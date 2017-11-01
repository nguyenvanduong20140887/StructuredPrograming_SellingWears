<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orderline extends Model
{
	protected $primaryKey = 'orderline_id';

	public function order()
	{
		return $this->belongsTo('App\Model\Order', 'order_id', 'order_id');
	}

	public function product()
	{
		return $this->belongsTo('App\Model\Product', 'prod_id', 'prod_id');
	}
}
