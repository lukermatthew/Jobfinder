<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    

    public function jobcategory()
    {
        return $this->belongsTo('App\Jobcategory');
    }

    public function jobtypecategory()
    {
        return $this->belongsTo('App\Jobtypecategory');
    }

    
    public function appjobs()
    {
        return $this->hasMany('App\Appjob');
    }


   
   
   
}
