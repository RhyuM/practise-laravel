<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Redirect;
class BidderAccountsController extends Controller
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
        $users = DB::table('users')->get();
        return view('home', ['users' => $users]);
    }

    public function account_status(Request $request, $id)
    {
         $data = User::find($id);

         if($data->account_status == 0)
         {
             $data->account_status = 1;
         }
         else
         {
            $data->account_status = 0;
         }

         $data->save();

         return Redirect::to('home')->with('message', $data->name.'account status has been changed successfully.');
    }
}
