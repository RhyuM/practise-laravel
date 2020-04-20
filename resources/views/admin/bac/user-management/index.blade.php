@extends('admin.bac.user-management.base')

@section('action-content')
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-info">  
          @if(session('message'))
            <div class="alert alert-success">
                  {{session('message')}}
            </div>
            @endif  
            <div class="card-header">
                <h3 class="card-title">Bidder List</h3>
                <!-- <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                             <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                     </div>
                </div> -->
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                      <table id="example3" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                        <thead>
                          <tr role="row">
                            <th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" aria-sort="descending">#</th>
                            <th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" aria-sort="descending">Company</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="display: none;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1; ?>
                          @foreach($users as $index => $user)
                            <tr role="row" class="odd">
                              <td class="sorting_1" tabindex="0">{{$users->firstItem() + $index}}</td>
                              <td class="sorting_1" tabindex="0">{{$user->company_name}}</td>
                              <td class="">{{$user->last_name}} {{$user->first_name }}, {{$user->middle_name}}</td>
                              <td class="">{{$user->email}}</td>
                              <td class="" style="display: none;">
                                    @if($user->account_status == 0) 
                                        Deactivated
                                    @else 
                                        Activated
                                    @endif</td>
                                    
                                <th><a href="{{ route('account_status',['id' => $user->id])}}">
                                    
                                    @if($user->account_status == 0) 
                                      Activate 
                                    @else 
                                      Deactivate 
                                      
                                    @endif</a>
                                    </th>
                              <!-- <td class="" style="display: none;">A</td> -->
                           </tr>
                          @endforeach 
                        </tbody>
                      </table>
                   </div>
                </div>
                <div class="row">
                      <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing <strong>{{ $users->firstItem() }} - {{ $users->lastItem() }}</strong> of <strong>{{$users->total()}}</strong> entries</div>
                      </div>
                      <div class="col-sm-12 col-md-7" >
                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                          {{ $users->links() }}
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