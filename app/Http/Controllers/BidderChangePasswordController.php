<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\User;
  
class BidderChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth:');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('bidder.change-password.index');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'current_password' => [new MatchOldPassword],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        if(User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]))
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