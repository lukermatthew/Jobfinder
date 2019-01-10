<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appjob extends Model
{
    //
    public function job()
    {
        return $this->belongsTo('App\job');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    
    

   
   
}