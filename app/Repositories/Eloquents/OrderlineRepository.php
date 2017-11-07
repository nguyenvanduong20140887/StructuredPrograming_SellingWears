
<?php

/**
 * @Author: 01101100
 * @Date:   2017-11-06 11:23:42
 * @Last Modified by:   01101100
 * @Last Modified time: 2017-11-06 12:05:24
 */

namespace App\Repositories\Eloquents;

use App\Model\Orderline;
use App\Repositories\Interfaces\OrderlineRepositoryInterface;

class OrderlineRepository extends EloquentRepository implements OrderlineRepositoryInterface {
	/**
	 * get model
	 * @return string
	 */
	public function getModel() {
		return Orderline::class;
	}
}