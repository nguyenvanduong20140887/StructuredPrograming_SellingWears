<?php

/**
 * @Author: 01101100
 * @Date:   2017-11-06 11:24:03
 * @Last Modified by:   01101100
 * @Last Modified time: 2017-11-06 12:32:46
 */

namespace App\Repositories\Eloquents;

use App\Model\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository extends EloquentRepository implements ProductRepositoryInterface {
	/**
	 * get model
	 * @return string
	 */
	public function getModel() {
		return Product::class;
	}

	public function findByAttr($field, $operation = '=', $value = '') {
		$products = Product::where($field, $operation, $value)->get();
		return $products;
	}
}