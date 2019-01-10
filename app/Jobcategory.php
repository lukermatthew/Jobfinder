<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobcategory extends Model
{
    //
    public function job()
    {
        return $this->hasMany('App\Job');
    }

 
   
}
