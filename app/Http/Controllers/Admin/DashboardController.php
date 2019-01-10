<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Jobcategory;
use App\Post;
use App\Subscriber;
use App\Job;
use App\Tag;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $jobs = Job::latest()->get();
        $popular_posts = Post::withCount('comments')
                            ->withCount('favorite_to_users')
                            ->orderBy('view_count','desc')
                            ->orderBy('comments_count','desc')
                            ->orderBy('favorite_to_users_count','desc')
                            ->take(5)->get();
        $total_pending_posts = Post::where('is_approved',false)->count();
        $all_views = Post::sum('view_count');
        $client_count = User::where('role_id',2)->count();
        $applicant_count = User::where('role_id',3)->count();
        $new_clients_today = User::where('role_id',2)
                                ->whereDate('created_at',Carbon::today())->count();

       $active_clients = User::where('role_id',2)
                                ->withCount('jobs')
                                ->withCount('posts')
                                ->withCount('comments')
                                ->withCount('favorite_posts')
                                ->orderBy('posts_count','desc')
                                ->orderBy('comments_count','desc')
                                ->orderBy('favorite_posts_count','desc')
                                ->take(10)->get();

                                $active_applicants = User::where('role_id',3)->latest()
                                
                                ->take(5)->get();

       $category_count = Category::all()->count();
       $tag_count = Tag::all()->count();
       $jobcategory_count = Jobcategory::all()->count();
       $subscriber_count = Subscriber::all()->count();

        return view('admin.dashboard',compact('posts','jobs','popular_posts','total_pending_posts','all_views','client_count','applicant_count','new_clients_today','active_clients','active_applicants','category_count','tag_count','jobcategory_count','subscriber_count'));
    }
}
