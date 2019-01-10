<?php

namespace App\Http\Controllers;

use App\Category;
use App\Jobcategory;
use App\Post;
use App\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $jobcategories = Jobcategory::all();
        $posts = Post::all();
        $jobs = Job::all();
        $jobs_count = Job::latest()->count();
        $jobcategories_count = Job::latest()->count();
        return view('welcome',compact('posts','jobs','jobcategories','jobtypecategories','jobs_count','jobcategories_count'));
    }
}
