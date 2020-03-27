@extends('bac.tender-management.tender-list.base')

@section('action-content')
<div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">
      <form action="{{route('tender-list.store')}}" method = "post">
        @csrf
        <div class="form-group">
          <label for="description">Description:</label>
          <input type="text" name = "description" id = "description" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="project_type">Type:</label>
          <input type="text" name = "project_type" id = "project_type" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="opening_date">Opening Date:</label>
          <input type="text" name = "opening_date" id = "opening_date" class="form-control" required>
        </div>
        
        <div class="form-group">
          <label for="approve_budget_cost">Approve Budget:</label>
          <input type="text" name = "approve_budget_cost" id = "approve_budget_cost" class="form-control" required>
        </div>  

        <div class="form-group">
          <label for="project_status">Project Status:</label>
          <input type="text" name = "project_status" id = "project_status" class="form-control" required>
        </div>

        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
</div>
@endsection