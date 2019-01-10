@extends('layouts.home.app')

@section('title','Search')



@push('css')
   
@endpush

@section('content')


<hr>


		<div class="container">
        <h2 class="title display-table-cell"><b>{{ $posts->count() }} Results for {{ $query }}</b></h2>
        </div>
        
        <section class="blog-area section">
        <div class="container">

            <div class="row">
                @if($posts->count() > 0)
                   
                       <!-- Post Content Column -->
  <div class="col-lg-12">

<!-- Title -->
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
                        <span>Posted by: {{ $post->user->name }}</span>


        

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
                    <div class="col-lg-12 col-md-12">
                     
                           
                               
                                    <h4 class="title">
                                        <strong>Sorry, No post found :(</strong>
                                    </h4>
                              
                         
                        
                    </div><!-- col-lg-4 col-md-6 -->
                @endif
        </div>  <br><br><br>
        {{ $posts->links() }}
        <br><br><br><br><br><br>
        
        </div>
 

</div><br><br><br>


@endsection

@push('js')

@endpush