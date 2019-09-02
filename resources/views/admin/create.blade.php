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
					<form role="form" method="post" action="/products" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							 
							<label>
								Name
							</label>
							<input type="text" name="name" class="form-control" required/>
						</div>

						<div class="form-group">
							 
							<label>
								Description
							</label>
							<textarea name="description"  class="form-control" required rows="10" cols="30"></textarea>
						</div>

						<div class="form-group">
							<label>Image</label>
		    				<input type="file" name="image" class="form-control-file" accept="image/x-png,image/gif,image/jpeg" required />
		  				</div>

						<div class="form-group">
							<label>
								Category
							</label>
							<select name="category_id">
								@foreach ($categories as $category)
  								<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</select>
						</div>
						
						<div class="form-group">
							 
							<label>
								Price
							</label>
							<input name="price" type="number" step="0.01" min="0" class="form-control"/>
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