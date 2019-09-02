@extends('layout')

@section('content')
@include('nav')
<div class="col-md-12">
			<h2>Details</h2>
			<div class="jumbotron row">
				<div class="preview col-md-5">
					<img src="{{url($productdata->image)}}">
				</div>
				<div class="details col-md-7 text-center">
					<dl>
						<dt>
							Name
						</dt>
						<dd>
							{{$productdata->name}}
						</dd>

						<dt>
							Description
						</dt>
						<dd style="margin-left: 100px;">
							{{$productdata->description}}
						</dd>

						<dt>
							Category
						</dt>
						<dd>
							{{$productdata->category->name}}
						</dd>
						<dt>
							Price	
						</dt>
						<dd>
							{{$productdata->price.' '}}&euro;
						</dd>

						{{-- <dd>
							<a href="#" class="btn btn-warning">Add to the cart</a>
						</dd> --}}
					</dl>
				</div>
				
			</div>
		</div>
@endsection