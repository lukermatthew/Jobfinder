<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobtypecategory extends Model
{
    //
    public function job()
    {
        return $this->hasMany('App\Job');
    }



}
