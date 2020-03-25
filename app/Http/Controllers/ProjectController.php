<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
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
        //Show all Projects from the database and return to view
        $projects = Project::all();

        return view('bac.tender-management.tender-list.index',['projects'=>$projects]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return view to create Project
        return view('bac.tender-management.tender-list.create');
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
        $Project = new Project();
        //input method is used to get the value of input with its
        //name specified
        $Project->description = $request->input('description');
        $Project->project_type = $request->input('project_type');
        $Project->opening_date = $request->input('opening_date');
        $Project->approve_budget_cost = $request->input('approve_budget_cost');
        $Project->project_status = $request->input('project_status');
        $Project->save();

        return redirect()->route('bac.tender-management.tender-list.index')->with('info','Project Added Successfully');
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
        $Project = Project::find($id);
        return view('bac.tender-management.tender-list.edit',['Project'=> $Project]);
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
        $Project = Project::find($request->input('id'));
        $Project->description = $request->input('description');
        $Project->project_type = $request->input('project_type');
        $Project->opening_date = $request->input('opening_date');
        $Project->approve_budget_cost = $request->input('approve_budget_cost');
        $Project->project_status = $request->input('project_status');
        $Project->save();

        return redirect()->route('bac.tender-management.tender-list.index')->with('info','Project Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Project = Project::find($id);
        $Project->delete();

        return redirect()->route('bac.tender-management.tender-list.index');
    }

}
