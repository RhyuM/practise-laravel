@extends('admin.bac.tender-management.tender-list.base')

@section('title')
<title>BIMS | EDIT</title>
@endsection

@section('tenderManagementMenuOpen', 'menu-open')
@section('tenderManagementOptionActive', 'active')
@section('tenderListLinkActive', 'active')

@section('action-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card card-primary">
               <div class="card-header">Edit</div>
                  <div class="card-body">
                      <form action="{{route('tender-list.update', $projects->id)}}" method = "post">
                          @method('PATCH') 
                          @csrf
                          <div class="form-group row">
                            <label for="description" class="col-md-2 col-form-label text-md-right">Description:</label>
                            <div class="col-md-9">
                              <input type="text" name = "description" id = "description" class="form-control" required value = "{{$projects->description}}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="category" class="col-md-2 col-form-label text-md-right">Category:</label>
                              <div class="col-md-9">
                                 <select class="form-control" id="category" name="category" id = "category" class="form-control" >
                                  <option  @if(old('category',$projects->category) == 'Infrastructure') selected @endif >
                                      Infrastructure
                                   </option>
                                   
                                   <option  @if(old('category',$projects->category) == 'Goods') selected @endif >
                                      Goods
                                   </option>
                                </select>
                              </div>
                          </div>

                          <div class="form-group row">
                             <label for="opening_date" class="col-md-2 col-form-label text-md-right">Bid Opening Date:</label>
                               <div class="col-md-9">
                                  <div class="input-group">
                                      <input class="date form-control" type="text" name = "opening_date" id = "reservationtime" class="form-control" required value = "{{$projects->opening_date}}">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                                      </div>
                                   </div>
                               </div>
                          </div>

                          <div class="form-group row">
                            <label for="approve_budget_cost" class="col-md-2 col-form-label text-md-right">Approve Budget:</label>
                            <div class="col-md-9">
                               <input type="text" name = "approve_budget_cost" id = "approve_budget_cost" class="form-control" required value = "{{$projects->approve_budget_cost}}">
                              </div>  
                          </div>

                          <div class="form-group row">
                            <label for="project_status" class="col-md-2 col-form-label text-md-right">Project Status:</label>
                            <div class="col-md-9">
                                <input type="text" name = "project_status" id = "project_status" class="form-control" required value = "{{$projects->project_status}}">
                            </div>
                          </div>

                          <div class="card-footer">
                            <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-2">
                                <a href="{{url()->previous()}}" class="btn btn-secondary btn">Cancel</a>
                                <input type="hidden" name="id" value = "{{$projects->id}}">
                                <button type = "submit" class = "btn btn-primary btn">Save</button>
                              </div>
                            </div>     
                          </div>  
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
