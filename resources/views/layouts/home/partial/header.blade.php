
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="header-social">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				
				<div class="user-panel">
				@if (Route::has('login'))
				@auth

					<a href="{{ Route('login') }}"><img class="rounded-circle" src="{{ Storage::disk('public')->url('profile/'.Auth::user()->image) }}" width="38" height="38" alt="Profile Image"></a>

				@else

					
					<a href="{{ Route('login') }}"><i class="fa fa-key"></i> Login</a>&nbsp;&nbsp;&nbsp;
					
				@if (Route::has('register'))
					<a href="{{ Route('register') }}"><i class="fa fa-flash"></i> Register</a>

					 @endif
            		 @endauth
				  @endif
				</div>
			</div>
		</div>


		
				  




		<div class="header-bottom">
			<div class="container">
				<a href="{{ route('home') }}" class="site-logo">
					<img src="{{ asset('foodblog/img/logo.png') }}" alt="">
				</a>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<div class="header-search">
					<a href="#"><i class="fa fa-search"></i></a>
				</div>
				<ul class="main-menu">
					<li><a href="{{ route('home') }}">Home</a></li>
					
					<li><a href="#">Free Recipes</a></li>
					<li><a href="{{ route('post.index') }}">Blog</a></li>
					
					<li><a href="{{ route('about') }}">About Us</a></li>
					<li><a href="{{ route('contact') }}">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->