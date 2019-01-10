<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class SearchjobController extends Controller
{
    public function searchjob(Request $request)
    {
        $query = $request->input('query');
        $jobs = Job::where('job_title','LIKE',"%$query%")->paginate(6);
        return view('searchjob',compact('jobs','query'));
    }
}
