<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
        return view('dashboard.index');
    }
    public function profile_edit(){
        return view('dashboard.profile.edit');
    }
    // profile update
    public function profile_update(Request $request){
        $request->validate([
            'name'  => 'required|string',
            'email' => 'required|email'
        ]);
        
        //User information
        $user = Auth::user();

        //Change password
        if ($request->new_password != null) {
            $request->validate([
                'new_password' => 'required|min:8|confirmed'
            ]);
            $user->password = Hash::make($request->new_password);
        }

        $user->name = $request->name;
        $user->email = $request->email;

        //Checking image
        if ($request->has('profile_image')) {
            $image = $request->file('profile_image');
            $imageName ='PI'.Auth::user()->id.'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/backend/photos'),$imageName);
            $user->image = $imageName; //insert image
        }
        $user->save();
        return back()->with('success', 'Profile update successfully');
      }
}
