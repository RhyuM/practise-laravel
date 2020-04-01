<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
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
        //Show all Projects from the database and return to view
        $projects = Project::paginate(5);

        return view('bac.bid-opening.index',compact('projects'));
    }
}
