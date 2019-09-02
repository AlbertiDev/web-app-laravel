@extends('layout')

@section('content')
@include('nav')
<div class="wrapper row">
		<div class="preview col-md-6">
						
				<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="{{url($product->image)}}"></div>
				</div>
						
						
		</div>
		<div class="details col-md-6">
						<h3 class="product-title">{{$product->name}}</h3>
						
						<p class="product-description">{{$product->description}}</p>
						<p class="product-category">{{$product->category->name}}</p>
						<h4 class="price">Price: <span>{{$product->price.' '}}&euro;</span></h4>
						
						<div class="action">
							<button class="add-to-cart btn btn-warning" type="button">add to cart</button>
						</div>
		</div>
</div>
@endsection