<?php

/**
 * @Author: 01101100
 * @Date:   2017-11-06 11:24:03
 * @Last Modified by:   01101100
 * @Last Modified time: 2017-11-07 01:01:40
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

	/**
	 * [findByAttr description]
	 * @param  [type] $field     [description]
	 * @param  string $operation [description]
	 * @param  string $value     [description]
	 * @return [type]            [description]
	 */
	public function findByAttr($field, $operation = '=', $value = '') {
		$products = Product::where($field, $operation, $value)->get();
		return $products;
	}

	/**
	 * search by product title
	 * @param  string $keyword [description]
	 * @return [type]          [description]
	 */
	public function search($keyword = '') {
		return $this->findByAttr('title', 'like', '%' . $keyword . '%');
	}

	// public function store($product) {
	// 	Product::create(['title' => $product['inputTitle'], 
	// 					 'actor' => $product['inputActor'], 
	// 					 'price' => $product['inputPrice'] 
	// 					]);
	// }
}