<?php

namespace App\Http\Controllers;

use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Project;
class AdminController extends Controller
{
    protected $redirectTo = 'dashboard';
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $users = User::whereDate('created_at', '=', Carbon::today() )->count();
        $projects = Project::whereDate('opening_date', '=', Carbon::today() )->count();
        
        return view('admin.common.index', compact('users','projects'));
    }
    
    public function changePassword()
    {
        return view('admin.common.change-password.index');
    } 

    public function userProfile()
    {
        $admin = Auth::user();
        return view('admin.common.profile.index' , compact('admin', $admin));
    }

    public function update_avatar(Request $request){

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $admin = Auth::user();

        $avatarName = $admin->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('public/avatars',$avatarName);

        $admin->avatar = $avatarName;
        $admin->save();

        return back()->with('success','You have successfully upload image.');

    } 

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => [new MatchOldPassword],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        if(Admin::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]))
        {
            $notification = array(
                'message' => 'Password Change Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->intended(url('dashboard'))->with($notification);
        }
        else
        {
            $notification = array(
                'message' => 'Password not match!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
