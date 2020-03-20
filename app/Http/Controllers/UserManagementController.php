<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Redirect;
class UserManagementController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        $this->middleware('auth:admin');
    }

    public function index()
    {
        
        $users = DB::table('users')->orderBy('id', 'asc')->get();

        return view('bac/user-management/index', ['users' => $users]);
        
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
         
         return Redirect::to('user-management/activation')->with('message', 'account status has been changed successfully.');
    }
}