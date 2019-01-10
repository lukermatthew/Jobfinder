<?php

namespace App\Http\Controllers\Applicant;

use App\User;
use App\Appinfo;
use App\Jobtypecategory;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;




class AppinfoController extends Controller
{
    public function index()
    {
        return view('applicant.settings');
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request,[
            
        ]);
        
       
        $user = User::findOrFail(Auth::id());
      
        $user->job_title = $request->job_title;
        $user->about = $request->about;
        $user->skill = $request->skill;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->website = $request->website;
        $user->portfolio = $request->portfolio;
        $user->resume = $request->resume;
        $user->save();
        Toastr::success('Profile Successfully Updated :)','Success');
        return redirect()->route('applicant.profile.index');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request,[
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password,$hashedPassword))
        {
            if (!Hash::check($request->password,$hashedPassword))
            {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Toastr::success('Password Successfully Changed','Success');
                Auth::logout();
                return redirect()->back();
            } else {
                Toastr::error('New password cannot be the same as old password.','Error');
                return redirect()->back();
            }
        } else {
            Toastr::error('Current password not match.','Error');
            return redirect()->back();
        }

    }


  
}
