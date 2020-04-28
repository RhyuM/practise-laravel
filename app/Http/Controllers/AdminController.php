<?php

namespace App\Http\Controllers;

use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Admin;

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
    
     //change password
    public function changePassword()
    {
        return view('admin.common.change-password.index');
    } 

    public function store(Request $request)
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
