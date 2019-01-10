<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appinfo extends Model
{
    //
    public function jobtypecategory()
    {
        return $this->belongsTo('App\Jobtypecategory');
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }


    
    

   
   
}