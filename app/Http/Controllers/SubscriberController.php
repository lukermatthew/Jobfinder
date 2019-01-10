<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriberController extends Controller
{
    //
   


   
        public function store(Request $request)
        {
            $this->validate($request,[
                'email' => 'required|email|unique:subscribers'
            ]);
    
            $subscriber = new Subscriber();
            $subscriber->email = $request->email;
            $subscriber->save();
            Toastr::success('Subscribes Successfully.','Success',["positionClass" => "toast-top-right"]);
            return redirect()->back();
         
        }



   
}
