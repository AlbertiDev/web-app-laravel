@extends('layout')

@section('content')
<div class="row">
	@include('nav')
	<div class="jumbotron">
				<h2>
					Home Page
				</h2>
				<h5>In this page you will be able to: View Products</h5>
				<p>
					This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
				</p>
			</div>
		</div>
		<div class="row">
		@foreach($products as $product)	
		<div class="col-md-3 text-center">
			<img src="{{$product->image}}" style="height: 60%; width: 50%;">
				<h5>{{$product->name}}</h5>
			<p>
				<a class="btn btn-info" href="/details/{{$product->id}}">View details »</a>
			</p>
		</div>
	@endforeach
	</div>
@endsection