@extends('admin.common.bid-opening.base')

@section('action-content')
<section class="content">
      <div class="row">
        <div class="col-12">
          <h6><td>Tenders to be open today, <b>{{Carbon\Carbon::today()->format('d-M-Y')}}</b></td></h6>
          <div class="card">  
              <div class="card-header">
                  <h3 class="card-title">Tenders</h3>
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
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Bid Opening Date & time</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Approve Budget</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">View/Open</th>
                                    </thead>
                                    <tbody>
                                      <?php $index = 1; ?>
                                      @foreach($projects as $project)
                                          @if (Carbon\Carbon::today()->format('Y-m-d') ===  Carbon\Carbon::parse($project->opening_date)->format('Y-m-d'))
                                           <tr role="row" class="odd">
                                              <td class="sorting_1" tabindex="">{{$index++}}</td>
                                                <td class="sorting_1" tabindex="">{{$project->description}}</td>
                                                <td class="">{{$project->project_type}}</td>
                                                <td>{{Carbon\Carbon::parse($project->opening_date)->format('d-M-Y h:i:s A')}}</td>
                                                <td class="">{{$project->approve_budget_cost}}</td>
                                                <td class="">{{$project->project_status}}</td>  
                                                <td>
                                                      @if (Carbon\Carbon::now()->format('Y-m-d H:i:s') >= Carbon\Carbon::parse($project->opening_date)->format('Y-m-d H:i:s'))
                                                          <div class="tombol-nav">
                                                             <a href="#" class="fas fa-file"></a><br>
                                                          </div>
                                                      @else
                                                          <p>disable</p>
                                                      @endif</td> 
                                            </tr>
                                          @endif</td>
                                      @endforeach 
                                    </tbody>
                              </table>
                          </div>
                      </div>
                      <!-- /.row -->
                  </div>
              </div>
              <!-- /.body -->
          </div>
          <!-- /.card -->
          
          <h6><td>Tenders that are not oppened on the specific date listed below.</td></h6>
          <div class="card">  
              <div class="card-header">
                  <h3 class="card-title">Pending Tenders</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                  <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                      <div class="col-sm-12 col-md-6"></div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                          <table id="example1" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                                <thead>
                                  <tr role="row">
                                    <th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" aria-sort="descending">#</th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" aria-sort="descending">Description</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Type</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Bid Opening Date & time</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Approve Budget</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">View/Open</th>
                                </thead>
                                <tbody>
                                  <?php $index = 1; ?>
                                  @foreach($projects as $project)
                                      @if (Carbon\Carbon::today()->format('Y-m-d') >  Carbon\Carbon::parse($project->opening_date)->format('Y-m-d'))
                                       <tr role="row" class="odd">
                                          <td class="sorting_1" tabindex="">{{$index++}}</td>
                                            <td class="sorting_1" tabindex="">{{$project->description}}</td>
                                            <td class="">{{$project->project_type}}</td>
                                            <td>{{Carbon\Carbon::parse($project->opening_date)->format('d-M-Y h:i:s A')}}</td>
                                            <td class="">{{$project->approve_budget_cost}}</td>
                                            <td class="">{{$project->project_status}}</td>  
                                            <td>
                                                  @if (Carbon\Carbon::now()->format('Y-m-d H:i:s') >= Carbon\Carbon::parse($project->opening_date)->format('Y-m-d H:i:s'))
                                                      <div class="tombol-nav">
                                                         <a href="#" class="fas fa-file"></a><br>
                                                      </div>
                                                  @else
                                                      <p>disable</p>
                                                  @endif</td> 
                                        </tr>
                                      @endif</td>
                                  @endforeach 
                                </tbody>
                                </table>
                          </div>
                      </div>
                      <!-- /.row -->
                  </div>
              </div>
              <!-- /.body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  </section>
@endsection