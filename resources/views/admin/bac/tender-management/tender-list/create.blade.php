@extends('admin.bac.tender-management.tender-list.base')

@section('title')
<title>BIMS | CREATE</title>
@endsection

@section('action-content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card">
            <div class="card-header">Add New Project</div>
               <div class="card-body">
                  <form action="{{route('tender-list.store')}}" method = "post">
                      @csrf
                      <div class="form-group row">
                          <label for="description" class="col-md-4 col-form-label text-md-right" >Description:</label>
                          <div class="col-md-6">
                            <input type="text" name = "description" id = "description" class="form-control" required>
                          </div>
                      </div>

                      <div class="form-group row">
                        <label for="project_type" class="col-md-4 col-form-label text-md-right">Type:</label>
                        <div class="col-md-6">
                          <select class="form-control" id="project_type" name="project_type" id = "project_type" class="form-control" required>
                            <option value=""disabled selected hidden></option>
                            <option >Infrastructure</option>
                             <option>Goods</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                          <label for="opening_date" class="col-md-4 col-form-label text-md-right">Bid Opening Date:</label>
                          <div class="col-md-6">
                              <div class="input-group">
                                  <input class="date form-control" type="text" name = "opening_date" id = "reservationtime" class="form-control" required>
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="form-group row">
                        <label for="approve_budget_cost"class="col-md-4 col-form-label text-md-right">Approve Budget:</label>
                        <div class="col-md-6">
                         <input type="text" name = "approve_budget_cost" id = "approve_budget_cost" class="form-control" required>
                        </div>
                      </div>  

                      <div class="form-group row">
                        <label for="project_status"class="col-md-4 col-form-label text-md-right">Project Status:</label>
                        <div class="col-md-6">
                          <input type="text" name = "project_status" id = "project_status" class="form-control" required>
                        </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <a href="{{url()->previous()}}" class="btn btn-secondary btn-sm">Cancel</a>
                              <button type = "submit" class = "btn btn-success btn-sm">Save</button>
                          </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection