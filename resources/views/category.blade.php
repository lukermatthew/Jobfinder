@extends('layouts.home.app')

@section('title','About')

@push('css')
   
@endpush

@section('content')

	<!-- Header section end -->


	<!-- Hero section -->
	
	<!-- Hero section end -->

<hr><br>

	



            <br>


<div class="container">

<div class="row">

  <!-- Post Content Column -->
  <div class="col-lg-12">
  <h4 class="title display-table-cell"><b>{{ $category->name }} <span class="badge badge-primary"> {{ $category_count }}</span></b></h4>
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


		
		<!-- Gallery section end -->
	
	@endsection
	
	@push('js')
	
	@endpush