<?php

namespace App\Http\Controllers\Applicant;


use App\Category;
use App\Jobcategory;
use App\User;
use App\Post;
use App\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
      
        $jobcategories = Jobcategory::all();
        $posts = Post::all();
        $jobs = Job::all();
        return view('applicant.home',compact('posts','jobs','jobcategories'));
    }

  
    public function show($id){

        
        
        $job = Job::find($id);
        return view('applicant.job.show')->with('job',$job);
    
    
        
    }
}
