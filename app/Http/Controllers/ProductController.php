<?php

namespace App\Http\Controllers;

use App\Model\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller {
	protected $product;

	/**
	 * [__construct description]
	 * @param ProductRepositoryInterface $product [description]
	 */
	public function __construct(ProductRepositoryInterface $product) {
		$this->product = $product;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$products = $this->product->getAll();
		return view('products.index', ['products' => $products]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Model\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function show(Product $product) {
		return view('products.show', ['product' => $product]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Product $product) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Product $product) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Product $product) {
		//
	}

	/**
	 * Search for products by title
	 * @param  Request $request include keyword field
	 * @return \Illuminate\Http\Response
	 */
	public function search(Request $request) {
		$products = $this->product->findByAttr('title', 'like', '%' . $request->input('keyword') . '%');
		return view('products.index', ['products' => $products]);
	}
}
