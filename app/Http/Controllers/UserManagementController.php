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
        // $this->authorize('isBAC');

        $users = DB::table('users')->orderBy('id', 'asc')->paginate(10);

        return view('admin.bac.user-management.index', ['users' => $users]);
        
    }
    public function accountStatus(Request $request, $id)
    {
        // $this->authorize('isBAC');
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
         $message=" account status has been changed successfully";
         
        return Redirect::to('user-management/bidder-list')->with('message', $data->first_name. $message);
    }
}
