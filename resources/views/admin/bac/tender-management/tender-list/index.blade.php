@extends('admin.bac.tender-management.tender-list.base')

@section('title')
<title>BIMS | TENDER LIST</title>
@endsection

@section('action-content')
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">  
            <div class="card-header">
                <h3 class="card-title">List of Tender</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                             <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                     </div>
                </div>
                <div class="card-tools">
                     <div class="input-group input-group-sm" style="width: 140px;">
                        <a href="{{route('tender-list.create') }}" class = "btn btn-primary btn-sm">Add New Project</a>
                     </div>
                </div>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                      <table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                        <thead>
                          <tr role="row">
                            <th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" aria-sort="descending">#</th>
                            <th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" aria-sort="descending">Description</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Type</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Bid Opening Date</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Approve Budget</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="display: none;">Action</th></tr>
                        </thead>
                        <tbody>
                          <?php $no = 1; ?>
                          @foreach($projects as $index => $project)
                            <tr role="row" class="odd">
                            <td class="sorting_1" tabindex="">{{$projects->firstItem() + $index}}</td>
                              <td class="sorting_1" tabindex="">{{$project->description}}</td>
                              <td class="">{{$project->project_type}}</td>
                              <td>{{Carbon\Carbon::parse($project->opening_date)->format('d-M-Y h:i:s A')}}</td>
                              <td class="">{{$project->approve_budget_cost}}</td>
                              <td class="">{{$project->project_status}}</td>  
                              <td class="" style="display: none;">
                               <form class="row" method="POST" action="{{route('tender-list.destroy', $project->id) }}" onsubmit = "return confirm('Are you sure?')">
                                     @csrf
                                     <div class="row-md-6">
                                         <a href="{{route('tender-list.edit', $project->id) }}" class = "btn btn-info btn-sm">
                                           <i class="fas fa-pencil-alt">
                                            </i>
                                           Update
                                         </a>
                                         <input type="hidden" name="_method" value="DELETE">
                                         <button type="submit"  class = "btn btn-danger btn-sm">
                                             <i class="fas fa-trash">
                                             </i>
                                             Delete
                                          </button>
                                    </div>           
                                </form></td>  
                           </tr>
                          @endforeach 
                        </tbody>
                      </table>
                   </div>
                </div>
                  <div class="row">
                      <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing <strong>{{ $projects->firstItem() }} - {{ $projects->lastItem() }}</strong> of <strong>{{$projects->total()}}</strong> projects</div>
                      </div>
                      <div class="col-sm-12 col-md-7" >
                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                          {{ $projects->links() }}
                        </div>
                      </div>
                  </div>
          <!-- /.card -->
              </div>
        <!-- /.col -->
        </div>
      <!-- /.row -->
      </div>
  </section>
@endsection