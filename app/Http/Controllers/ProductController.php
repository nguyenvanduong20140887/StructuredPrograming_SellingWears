<?php

namespace App\Http\Controllers;

use App\Model\Product;
use App\Model\Category;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller {
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
		$categories = Category::all();
		return view('products.create', ['categories' => $categories]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
		// dd($request);
		$title = $request->input('inputTitle');
		$actor = $request->input('inputActor');
		$price = $request->input('inputPrice');

		$product = ['category' => 1, 'title' => $title, 'actor' => $actor, 'price' => $price];

		$result = $this->product->create($product);
		return redirect('product/'.$result->prod_id);
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
	public function edit(Product $product) { // nguyen mau cho nay la j Duong o tren co mo ta day
		// $product = Product::findOrFail($id);
		return view('products.edit', ['product' => $product]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$this->validate($request, [
		 	'title' => 'required',
		 	'category' => 'required',
		 	'actor' => 'required',
		 	'price' => 'required|numeric',
		 ]);

		$prod = Product::find($id);
		if($prod){
			$prod->update($request->all());
		}
		$products = $this->product->getAll();
		return view('products.index', ['products' => $products]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$prod = Product::find($id);
		$prod->delete();
		$products = $this->product->getAll();
		return view('products.index', ['products' => $products]);
	}

	/**
	 * Search for products by title
	 * @param  Request $request include keyword field
	 * @return \Illuminate\Http\Response
	 */
	public function search(Request $request) {
		$products = $this->product->search($request->input('keyword'));
		return view('products.index', ['products' => $products]);
	}
}

