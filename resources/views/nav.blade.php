		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="/">Home</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav ml-md-auto">
						
						<li class="nav-item active">
							 <a class="nav-link" href="/cart">Cart <span class="sr-only">(current)</span></a>
						</li>
						
						<li class="nav-item active">
							 <a class="nav-link" href="/products">Admin Page<span class="sr-only">(current)</span></a>
						</li>
						
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
							@if(Auth::check()) You are logged in </a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								 <a href="#" onclick="event.preventDefault();
document.getElementById('logout-form').submit();" class="dropdown-item">
                                        Logout
</a>
 <form id="logout-form" action="{{url('/logout')}}" method="POST" style="display: none;">
 	@csrf
 </form>
							</div>
							@else Login/Register</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="/login">Login</a>
								 <a class="dropdown-item" href="/register">Register</a>
							</div>
							@endif
						</li>
					</ul>
				</div>
			</nav>
		</div>
