<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Project;
class AdminController extends Controller
{


    protected $redirectTo = 'dashboard';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /** 
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Carbon::setLocale('nl');
        // $today = Carbon::today();
        // $users = Admin::count();
        // $projects = Project::count();

        $users = User::whereDate('created_at', '=', Carbon::today() )->count();
        $projects = Project::whereDate('opening_date', '=', Carbon::today() )->count();
        
        return view('admin.common.index', compact('users','projects'));
    }
    
}
