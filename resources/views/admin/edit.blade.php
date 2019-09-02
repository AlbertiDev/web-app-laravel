@extends('layout')

@section('content')
@include('nav')
<div class="col-md-12">
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<h2>Product Register</h2>
						@if ($errors->any())
					      <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					              <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					      </div><br />
					    @endif
					<form role="form" method="post" action="/products/{{$product->id}}">
						@csrf
						@method('PUT')
						<div class="form-group">
							 
							<label>
								Name
							</label>
							<input value="{{$product->name}}" type="text" name="name" class="form-control" required/>
						</div>

						<div class="form-group">
							 
							<label>
								Description
							</label>
							<textarea name="description"  class="form-control" required rows="10" cols="30">{{$product->description}}</textarea>
						</div>

						<div class="form-group">
							 
							<label>
								Category
							</label>
							{{-- <select name="select">
  								<option value="volvo">Volvo</option>
  								<option value="saab">Saab</option>
  								<option value="mercedes">Mercedes</option>
  								<option value="audi">Audi</option>
							</select> --}}
						</div>
						
						<div class="form-group">
							 
							<label>
								Price
							</label>
							<input value="{{$product->price}}" name="price" type="number" step="0.01" min="0" class="form-control"/>
						</div>
												
						<button type="submit" class="btn btn-primary">
							Submit
						</button>
					</form>
				</div>
				<div class="col-md-3">
				</div>
			</div>
		</div>
@endsection