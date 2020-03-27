<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\Redirect;
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
        $project = Project::all();

        return view('bac.tender-management.tender-list.index',['project'=>$project]);
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
        $project = new Project();
        //input method is used to get the value of input with its
        //name specified
        $project->description = $request->input('description');
        $project->project_type = $request->input('project_type');
        $project->opening_date = $request->input('opening_date');
        $project->approve_budget_cost = $request->input('approve_budget_cost');
        $project->project_status = $request->input('project_status');
        $project->save();

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
        $project = Project::find($id);
        return view('bac.tender-management.tender-list.edit',['project'=> $project]);
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
        $project = Project::find($request->input('id'));
        $project->description = $request->input('description');
        $project->project_type = $request->input('project_type');
        $project->opening_date = $request->input('opening_date');
        $project->approve_budget_cost = $request->input('approve_budget_cost');
        $project->project_status = $request->input('project_status');
        $project->save();

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
        $project = Project::find($id);
        $project->delete();

        return redirect()->intended('tender-management/tender-list');
    }
    
}
