@extends('layout')

@section('content')
@include('nav')
<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<h2>Admin page</h2>
					<div>
						<a role="button" href="/products/create" class="btn btn-success btn-sm">Add</a>
        			</div>
						<br>
					    @if ($errors->any())
					      <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					              <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					      </div><br />
					    @endif
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>
									#
								</th>
								<th>
									Image
								</th>
								<th>
									Name
								</th>
								<th>
									Description
								</th>
								<th>
									Categories
								</th>
								<th>
									Price
								</th>
								<th>
									Edit
								</th>
								<th>
									Remove
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($products as $product)
							<tr>
								<td>
									{{$product->id}}
								</td>
								<td>
									<img style="width:30px; height: 30px;" src="{{$product->image}}">
								</td>
								<td>
									<a href="/products/{{$product->id}}">{{$product->name}}</a>
								</td>
								<td>
									{{$product->description}}
								</td>
								<td>
									{{$product->category->name}}
								</td>
								<td>
									{{$product->price.' '}}&euro;
								</td>
								<td>
          								<a role="button" href="/products/{{$product->id}}/edit" class="btn btn-primary btn-sm">Edit</a> 
								</td>
								<td>
          								<form method="POST" action="products/{{$product->id}}">
          									@csrf
          									@method('DELETE')
          									<button type="submit" role="button" class="btn btn-danger btn-sm">Remove</button>
          								</form>
								</td>
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
			</div>
		</div>
@endsection
