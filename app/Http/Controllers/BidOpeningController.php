<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Admin;
use Carbon\Carbon;
use DB;
class BidOpeningController extends Controller
{
  //
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.common.bid-opening.index',compact('projects'));
    }   
}
