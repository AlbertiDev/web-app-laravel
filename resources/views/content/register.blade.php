@extends('layout')

@section('content')
@include('nav')
<div class="col-md-12">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<h2>Sign Up</h2>
					@foreach($errors->all() as $error)
					  <p style="color:red">{{$error}}</p>
					@endforeach
					<form role="form" method="post" action="{{ route('register') }}">
						@csrf
						<div class="form-group">
							 
							<label>
								Name
							</label>
							<input type="text" name="name" value="{{ old('name') }}" class="form-control" required/>
						</div>

						<div class="form-group">
							 
							<label>
								Last Name
							</label>
							<input type="text" name="last_name" value="{{ old('last_name') }}"class="form-control" required/>
						</div>

						<div class="form-group">
							 
							<label>
								Address
							</label>
							<input type="text" name="address" value="{{ old('address') }}" class="form-control" required/>
						</div>

						<div class="form-group">
							 
							<label>
								Email
							</label>
							<input type="email" name="email" value="{{ old('email') }}" class="form-control" required/>
						</div>
						
						<div class="form-group">
							 
							<label>
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