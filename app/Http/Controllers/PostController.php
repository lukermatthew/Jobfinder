<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::latest()->approved()->published()->paginate(6);
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();
        $category_count = Category::all()->count();
        
        $tag_count = Tag::all()->count();
        $posts_count = Post::latest()->approved()->published()->count();
        return view('post.index',compact('posts','categories','tags','posts_count','category_count','tag_count'));
    }


    public function postByCategory($slug)
    {
        $category = Category::where('slug',$slug)->first();
        $posts = $category->posts()->latest()->approved()->published()->paginate(6);

        $category_count = $category->posts()->latest()->approved()->published()->count();
        return view('category',compact('category','posts','category_count'));
    }

    public function postByTag($slug)
    {
        $tag = Tag::where('slug',$slug)->first();
        $posts = $tag->posts()->latest()->approved()->published()->paginate(6);
        $tag_count = $tag->posts()->latest()->approved()->published()->count();
        return view('tag',compact('tag','posts','tag_count'));
    }

    public function details($slug){

        
        
        $post = Post::where('slug',$slug)->approved()->published()->first();

        $blogKey = 'blog_' . $post->id;

        if (!Session::has($blogKey)) {
            $post->increment('view_count');
            Session::put($blogKey,1);
        }
        return view('post',compact('post'));


    }
}
