<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'prod_id';

    public function category()
    {
    	return $this->belongsTo('App\Model\Category', 'category', 'category');
    }

    public function orderlines()
    {
    	return $this->hasMany('App\Model\Orderline', 'prod_id', 'prod_id');
    }
}
