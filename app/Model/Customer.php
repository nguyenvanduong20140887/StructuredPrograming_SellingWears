<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'customer_id';

    public function orders()
    {
        return $this->hasMany('App\Model\Order', 'customer_id', 'customer_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\Model\User', 'customer_id', 'id');
    }
}
