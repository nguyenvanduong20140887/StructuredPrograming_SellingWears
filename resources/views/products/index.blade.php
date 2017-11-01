@extends('layouts.app')

@section('title')
	<title>Product list</title>
@endsection

@section('content')
<div class="container">
    <div class="row">
	  <div class="col-sm-6 col-md-4">
	    @foreach ($products as $prod)
	    	<div class="thumbnail">
		      <img src="" alt="default product image">
		      <div class="caption">
		        <h3>{{ $prod->title }}</h3>
		        <p>Category : <b>{{ $prod->category_->category_name }}</b></p>
		        <h5>Brand : <b>{{ $prod->actor }}</b></h5>
		        <h5>Price : <b>{{ $prod->price }} $</b></h5>
		      </div>
		    </div>
	    @endforeach
	  </div>
	</div>
</div>
@endsection