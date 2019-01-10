@extends('layouts.home.app')

@section('title','Home')

@push('css')
   
@endpush

@section('content')


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-slide-item set-bg" data-setbg="{{ asset('foodblog/img/slider-bg-1.jpg') }}">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>Love's Delights</span></h2>
					<h2 class="hs-title-2"><span>Share your Idea's</span></h2>
					<h2 class="hs-title-3"><span>for all the foodies</span></h2>
				</div>
			</div>
			<div class="hero-slide-item set-bg" data-setbg="{{ asset('foodblog/img/slider-bg-2.jpg') }}">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>Love's Delights</span></h2>
					<h2 class="hs-title-2"><span>Share your Idea's</span></h2>
					<h2 class="hs-title-3"><span>for all the foodies</span></h2>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Add section end -->
	<section class="add-section spad">
		<div class="container">
			<div class="add-warp">
				<div class="add-slider owl-carousel">
					<div class="as-item set-bg" data-setbg="{{ asset('foodblog/img/add/1.jpg') }}"></div>
					<div class="as-item set-bg" data-setbg="{{ asset('foodblog/img/add/2.jpg') }}"></div>
					<div class="as-item set-bg" data-setbg="{{ asset('foodblog/img/add/3.jpg') }}"></div>
				</div>
				<div class="row add-text-warp">
					<div class="col-lg-4 col-md-5 offset-lg-8 offset-md-7">
						<div class="add-text text-white">
							<div class="at-style"></div>
							
							<ul>
								<li>Subscribe to get you updated</li>
								<li>All Recipe and Post</li>
								
							</ul>

							<div class="col-lg-12 col-md-6">	
                    <div class="input-area">
                        <form class="contact-form" method="POST" action="{{ route('subscriber.store') }}">
                            {{ csrf_field() }}
                            <input class="email-input" name="email" type="email" required="required" placeholder="Enter your email">
                            <button class="btn btn-primary" type="submit">Subscribe</i></button>
						</form>
					</div>
				</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Add section end -->


			



	<!-- Recipes section -->
	<section class="recipes-section spad pt-0">
		<div class="container">
			<div class="section-title">
				<h2>Free Latest recipes</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="{{ asset('foodblog/img/recipes/1.jpg') }}" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Traditional Pizza</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-md-6">
					<div class="recipe">
					<img src="{{ asset('foodblog/img/recipes/2.jpg') }}" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Italian home-made pasta</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
					<img src="{{ asset('foodblog/img/recipes/3.jpg') }}" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Chesse Cake Tart</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
					<img src="{{ asset('foodblog/img/recipes/4.jpg') }}" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Traditional Pizza</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="{{ asset('foodblog/img/recipes/5.jpg') }}" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Italian home-made pasta</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
					<img src="{{ asset('foodblog/img/recipes/6.jpg') }}" alt="">
						<div class="recipe-info-warp">
								<div class="recipe-info">
								<h3>Chesse Cake Tart</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Recipes section end -->


	<!-- Footer widgets section -->
	<section class="bottom-widgets-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-6 ftw-warp">
					<div class="section-title">
						<h3>Newer Posts</h3>
					</div>

					<div class="container">
    				<div class="row">
				
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
							<span><a class="avatar" href="#"><img class="rounded-circle" src="{{ Storage::disk('public')->url('profile/'.$post->user->image) }}" width="30" height="30" alt="Profile Image"></a> {{ $post->user->name }}</span>
							

							       

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
          

                          
							
							<a href="{{route('post.details',$post->slug) }}" class="readmore"><i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>

                
                @endforeach

               
               

                 
            
				
	

				
	</section>
	<!-- Footer widgets section end -->


	<!-- Review section end -->
	<section class="review-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2">
					<div class="review-item">
						<div class="review-thumb set-bg" data-setbg="img/thumb/11.jpg">
							<div class="review-date">
								<span>May 04, 2018</span>
							</div>
						</div>
						<div class="review-text">
							<span>March 14, 2018</span>
							<h6>Feta Cheese Burgers</h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<div class="author-meta">
								<div class="author-pic set-bg" data-setbg="img/author.jpg"></div>
								<p>By Janice Smith</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2">
					<div class="review-item">
						<div class="review-thumb set-bg" data-setbg="img/thumb/12.jpg">
							<div class="review-date">
								<span>May 04, 2018</span>
							</div>
						</div>
						<div class="review-text">
							<span>March 14, 2018</span>
							<h6>Mozarella Pasta</h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<div class="author-meta">
								<div class="author-pic set-bg" data-setbg="img/author.jpg"></div>
								<p>By Janice Smith</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end -->


	<!-- Gallery section -->
	<div class="gallery">
		<div class="gallery-slider owl-carousel">
			<div class="gs-item set-bg" data-setbg="{{ asset('foodblog/img/instagram/1.jpg') }}"></div>
			<div class="gs-item set-bg" data-setbg="{{ asset('foodblog/img/instagram/2.jpg') }}"></div>
			<div class="gs-item set-bg" data-setbg="{{ asset('foodblog/img/instagram/3.jpg') }}"></div>
			<div class="gs-item set-bg" data-setbg="{{ asset('foodblog/img/instagram/4.jpg') }}"></div>
			<div class="gs-item set-bg" data-setbg="{{ asset('foodblog/img/instagram/5.jpg') }}"></div>
			<div class="gs-item set-bg" data-setbg="{{ asset('foodblog/img/instagram/6.jpg') }}"></div>
		</div>






@endsection

@push('js')

@endpush