<!DOCTYPE html>
<html lang="en">
<head>
	<title>Love's Delights - Website</title>
	<meta charset="UTF-8">
	<meta name="description" content="Food Blog Web Template">
	<meta name="keywords" content="food, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="{{ asset('fooblog/img/favicon.ico') }}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('foodblog/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('foodblog/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('foodblog/css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ asset('foodblog/css/animate.css') }}"/>
	<link rel="stylesheet" href="{{ asset('foodblog/css/style.css') }}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

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
					<a href="{{ Route('register') }}"><i class="fa fa-flash"></i> Register</a> / 
					<a href="{{ Route('login') }}"><i class="fa fa-key"></i> Login</a>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<a href="#" class="site-logo">
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
					
					<li><a href="about.html">Free Recipes</a></li>
					<li><a href="{{ route('post.index') }}">Blog</a></li>
					
					<li><a href="{{ route('about') }}">About Us</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	
	<!-- Hero section end -->

<hr><br>

	



            <br>


<div class="container">

<div class="row">

  <!-- Post Content Column -->
  <div class="col-lg-12">
  <h4 class="title display-table-cell"><b>{{ $tag->name }} <span class="badge badge-primary">{{ $tag_count }}</span></b></h4>
    <!-- Title -->
    <div class="container">
    <div class="row">

     @if($posts->count() > 0)
                    @foreach($posts as $post)
    <div class="col-lg-4">
					<div class="sp-blog-item">
						<div class="blog-thubm">
							<img src="{{ Storage::disk('public')->url('post/'.$post->image) }}" alt="{{ $post->title }}" alt="">
							<div class="blog-date">
                            <span>{{ \Carbon\Carbon::parse ($post->created_at)->diffForHumans() }}</span>
							</div>
						</div>
						<div class="blog-text">
							<h5>{{ str_limit($post->title, $limit = 22, $end = '...') }}</h5>
							<span>By Maria Williams</span>

							@guest
    <a href="javascript:void(0);" onclick="toastr.error('To add favorite list. You need to login first.','Info',{
        closeButton: true,
        progressBar: true,
    })"><i class="fa fa-heart"></i> {{ $post->favorite_to_users->count() }}</a>
@else
    <a href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $post->id }}').submit();"
       class="{{ !Auth::user()->favorite_posts->where('pivot.post_id',$post->id)->count()  == 0 ? 'favorite_posts' : ''}}"><i class="fa fa-heart"></i> {{ $post->favorite_to_users->count() }}</a>

    <form id="favorite-form-{{ $post->id }}" method="POST" action="{{ route('post.favorite',$post->id) }}" style="display: none;">
        @csrf
    </form>
@endguest

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="{{route('post.details',$post->slug)}}"><i class="fa fa-comment"></i> {{ $post->comments->count() }}</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
<a href=""><i class="fa fa-eye"></i> {{ $post->view_count }}</a>

							

                          
							
							<a href="{{route('post.details',$post->slug)}}" class="readmore"><i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>

                
                @endforeach

                 @else

                 
                    <div class="col-lg-4 col-md-6">
                        
                                <div class="blog-info">
                                    <h4 class="title">

                                    <br><br><br>
                                        <strong>Sorry, No post found :(</strong>
                                    </h4>
                               
                        </div><!-- card -->
                    </div><!-- col-lg-4 col-md-6 -->
               

                 
              @endif

              

              
			</div>  <br><br><br>{{ $posts->links() }}
            
            
            
            </div>
     

  </div>

 

</div></div>

            

	

<br><br><br>
		
	<!-- Gallery section end -->


	<!-- Footer section  -->
	<footer class="footer-section set-bg" data-setbg="{{ asset('foodblog/img/footer-bg.jpg') }}">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer-logo">
						<img src="img/logo.png" alt="">
					</div>
					<div class="footer-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-6 text-lg-right">
					<ul class="footer-menu">
						<li><a href="#">Home</a></li>
						<li><a href="#">Features</a></li>
						<li><a href="#">Receipies</a></li>
						<li><a href="#">Reviews</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('foodblog/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('foodblog/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('foodblog/js/main.js') }}"></script>
</body>
</html>