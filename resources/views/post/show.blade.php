@extends('layouts.home.app')

@section('title','Post')



@push('css')
   
@endpush

@section('content')

	<!-- Hero section -->
	
	<!-- Hero section end -->
   
    <section class="page-top-section set-bg" data-setbg="{{ asset('foodblog/img/page-top-bg.jpg') }}">
		<div class="container">
			<h2>Blog</h2>
		</div>
	</section>
    

 


<div class="container">

               <div class="row"> 
				<div class="col-lg-8">
					<div class="sp-blog-item">
						<div class="blog-text">
						<h3>{{ str_limit($post->title, $limit = 33, $end = '...') }}</h3>
						<p>&nbsp;Posted by: {{ $post->user->name }}</p>
						</div>
                        <div class="col-lg-12">
							<img src="{{ Storage::disk('public')->url('post/'.$post->image) }}" style="padding:30px; margin-top:-75px; margin-bottom:-50px;" alt="{{ $post->title }}" alt="">
						</div>
						<div class="sp-blog-item">
						<div class="blog-text">
              <h3  style="margin-top:-75px;">&nbsp;&nbsp;{!! html_entity_decode($post->body)  !!}</h3>
              <br><br>
           
                                <h5>SHARE WITH</h5>
                                <h3>
                               <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                               <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                               <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></h3>
                         
                            
                            <br><hr>
  <section class="comment-section">
        <div class="container">
            <h4><b>POST COMMENT1</b></h4>
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="comment-form">
                        @guest
                            <p>For post a new comment. You need to login first. <a href="{{ route('login') }}">Login</a></p>
                        @else
                            <form method="post" action="{{ route('comment.store',$post->id) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea name="comment" rows="2" class="text-area-messge form-control"
                                                  placeholder="Enter your comment" aria-required="true" aria-invalid="false"></textarea >
                                    </div><!-- col-sm-12 -->
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit" id="form-submit"><b>POST COMMENT</b></button>
                                    </div><!-- col-sm-12 -->

                                </div><!-- row -->
                            </form>
                        @endguest
                    </div><!-- comment-form --><br><br>

                    <h4><b>COMMENTS({{ $post->comments()->count() }})</b></h4>
                    @if($post->comments->count() > 0)
                        @foreach($post->comments as $comment)
                            <div class="commnets-area ">

                                <div class="comment">

                                    <div class="post-info">
                                        
                                        
                       
                       
                                        <div class="middle-area">
                                            
                                            <h6 class="date">on {{ $comment->created_at->diffForHumans()}}</h6>
                                        </div>

                                    </div><!-- post-info -->

                                    <p>{{ $comment->comment }}</p>

                                </div>

                            </div><!-- commnets-area -->
                        @endforeach
                    @else

                    <div class="commnets-area ">

                        <div class="comment">
                            <p>No Comment yet. Be the first :)</p>
                    </div>
                    </div>

                    @endif

                </div><!-- col-lg-8 col-md-12 -->

            </div><!-- row -->

        </div><!-- container -->
    </section>
              </div>
              
              </div>
              
              
					</div>
				</div>
				<div class="col-md-4">
				<div class="sp-blog-item">
    
	 
      <div class="card-body">
        <div class="row">
		
          <div class="col-lg-12">
		  <h5>Categories  </span></h5><br>
            <ul class="list-unstyled mb-0">
        
        <div class="row">
          <div class="col-lg-12">
            <ul class="list-unstyled mb-0">
            

                    
                    <div class="body">
            @foreach($post->categories as $category)
           
                 <a href=""> <span class="badge badge-primary">{{ $category->name }}</span></a>
               
                  
                  @endforeach
                  </div> 

                
             
            </ul>
          </div>
        </div>
     

                
             
            </ul>
          </div>
        </div>
      </div>
    </div>

<div class="sp-blog-item">
	 <div class="card-body">
        <div class="row">
		
          <div class="col-lg-12">
		  <h5>Tags  </span></h5><br>
            <ul class="list-unstyled mb-0">
        
        <div class="row">
          <div class="col-lg-12">
            <ul class="list-unstyled mb-0">
            

                    
                    <div class="body">
            @foreach($post->tags as $category)
           
                 <a href=""> <span class="badge badge-primary">{{ $category->name }}</span></a>
               
                  
                  @endforeach
                  </div> 

                
             
            </ul>
          </div>
        </div>
     

                
             
            </ul>
          </div>
        </div>
      </div>
    </div>

	
<div class="sp-blog-item">
	
									
<img src="{{ asset('foodblog/img/blog/1.jpg') }}" alt="">

			<div class="add-warp">
				
				<div class="row add-text-warp">
					<div class="col-lg-12 col-md-5  offset-md-0" >
						<div class="add-text text-white" >
							<div class="at-style"></div>
							
							<ul style="padding:15px; margin-bottom:10px; margin-top:-35px; ">
								<li>Subscribe to get you updated</li>
								<li>All Recipe and Post</li>
								
							</ul>

							<div class="col-lg-12 col-md-6">	
                    <div class="input-area">
                        <form class="contact-form" method="POST" action="{{ route('subscriber.store') }}">
                            @csrf
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
  
               
                  
                 
               

	
	
	
    <!-- Categories Widget -->
	
    



				
			
                    

				</div>
                
                
    
				



         

</div><br>   <br>  <br>   <br> <br>   <br>  <br>   <br>
@endsection

@push('js')

@endpush