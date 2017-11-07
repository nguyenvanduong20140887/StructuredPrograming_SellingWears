<?php

/**
 * @Author: 01101100
 * @Date:   2017-11-04 19:34:36
 * @Last Modified by:   01101100
 * @Last Modified time: 2017-11-06 12:04:13
 */

namespace App\Repositories\Eloquents;

use App\Model\Order;
use App\Repositories\Interfaces\OrderRepositoryInterface;

class OrderRepository extends EloquentRepository implements OrderRepositoryInterface {
	/**
	 * get model
	 * @return string
	 */
	public function getModel() {
		return Order::class;
	}
}