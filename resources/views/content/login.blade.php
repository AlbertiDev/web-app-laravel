@extends('layout')

@section('content')

@include('nav')
<div class="col-md-12">
			<div class="row justify-content-center">
				
				<div class="col-md-4">
					<h2>Login</h2>
					@foreach($errors->all() as $error)
					  <p style="color:red">{{$error}}</p>
					@endforeach
					<form method="POST" action="{{ route('login') }}">
                        @csrf

						<div class="form-group">
							 
							<label for="exampleInputEmail1">
								Email address
							</label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ old('email') }}" />
						</div>

						<div class="form-group">
							 
							<label for="exampleInputPassword1">
								Password
							</label>
							<input type="password" name="password" class="form-control" id="exampleInputPassword1" />
						</div>
						
						<button type="submit" class="btn btn-primary">
							Submit
						</button>
					</form>
				
				</div>
			</div>
		</div>
@endsection