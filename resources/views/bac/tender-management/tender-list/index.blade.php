@extends('bac.tender-management.tender-list.base')

@section('action-content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Tender List</div>
                <div class="card-body">
                  <table class="table">
                       <thead>
                        <tr>
                          <th>Description</th>
                          <th>Type</th>
                          <th>Opening Date</th>
                          <th>Approve Budget</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                       </thead>
                        @foreach($project as $project)
                          <tr>
                            <td>{{$project->description}}</td>
                            <td>{{$project->project_type}}</td>
                            <td>{{$project->opening_date}}</td>
                            <td>{{$project->approve_budget_cost}}</td>
                            <td>{{$project->project_status}}</td>
                            <td>
                              <form class="row" method="POST" action="{{route('tender-list.destroy', $project->id) }}" onsubmit = "return confirm('Are you sure?')">
                                @csrf
                                  
                                  <a href="{{route('tender-list.create') }}" class = "btn btn-primary">Add</a>
                                  <a href="{{route('tender-list.edit', $project->id) }}" class = "btn btn-info">Edit</a>

                                  <input type="hidden" name="_method" value="DELETE">
                                  <button type="submit"  class = "btn btn-danger">Delete</button>
                              </form>
                            </td>
                          </tr>
                        @endforeach 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection