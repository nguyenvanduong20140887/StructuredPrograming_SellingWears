@extends('layouts.app')

@section('title')
	<title>Product list</title>
@endsection

@section('content')
<div class="container">
    <div class="row">
	    @foreach ($products as $prod)
		    <div class="col-sm-6 col-md-4">
		    	<div class="thumbnail">
		    		<a href="{{ url('product/' . $prod->prod_id) }}">
					<img src="http://keithmackay.com/images/picture.jpg" alt="default product image">
					</a>
					<div class="caption">
						<h3>{{ $prod->title }}</h3>
						<p>Category : <b>{{ $prod->category_->category_name }}</b></p>
						<h5>Brand : <b>{{ $prod->actor }}</b></h5>
						<h5>Price : <b>{{ $prod->price }} $</b></h5>
						@if (auth()->user())
							@if (auth()->user()->isAdmin())
								<h5>
									<a href="{{ route('product.edit', $prod->prod_id) }}">Edit</a>
									<a href="{{ route('product.delete', ['id' => $prod->prod_id]) }}">Delete</a>
								</h5>
							@endif
						@endif
					</div>
			    </div>
			</div>
	    @endforeach
	</div>
</div>
@endsection
