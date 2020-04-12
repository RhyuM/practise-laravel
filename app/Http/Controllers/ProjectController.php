<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
class ProjectController extends Controller
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
        // $this->authorize('isBAC');
        $projects = Project::paginate(10);

        return view('admin.bac.tender-management.tender-list.index',compact('projects'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return view to create Project
        return view('admin.bac.tender-management.tender-list.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Persist the Project in the database
        //form data is available in the request object
        $projects = new Project();
        //input method is used to get the value of input with its
        //name specified
        $projects->description = $request->input('description');
        $projects->project_type = $request->input('project_type');
        $projects->opening_date = $request->input('opening_date');
        $projects->approve_budget_cost = $request->input('approve_budget_cost');
        $projects->project_status = $request->input('project_status');
        $projects->save();

        return redirect()->intended('tender-management/tender-list')->with('info','Project Added Successfully');
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find the Project
        $projects = Project::find($id);
        return view('admin.bac.tender-management.tender-list.edit',['projects'=> $projects]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Retrieve the Project and update
        $projects = Project::find($request->input('id'));
        $projects->description = $request->input('description');
        $projects->project_type = $request->input('project_type');
        $projects->opening_date = $request->input('opening_date');
        $projects->approve_budget_cost = $request->input('approve_budget_cost');
        $projects->project_status = $request->input('project_status');
        $projects->save();

        return redirect()->intended('tender-management/tender-list')->with('info','Project Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = Project::find($id);
        $projects->delete();

        return redirect()->intended('tender-management/tender-list');
    }
    
}
