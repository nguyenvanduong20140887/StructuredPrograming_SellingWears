<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'prod_id';
    protected $fillable = ['category', 'title', 'actor', 'price'];

    public function category_()
    {
    	return $this->belongsTo('App\Model\Category', 'category', 'category');
    }

    public function orderlines()
    {
    	return $this->hasMany('App\Model\Orderline', 'prod_id', 'prod_id');
    }
}
