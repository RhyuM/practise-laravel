@extends('admin.common.change-password.base')

@section('title')
<title>BIMS | CHANGE PASSWORD</title>
@endsection

@section('action-content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form  action="{{ route('change.password') }}" method="POST" role="form" id="quickForm" novalidate="novalidate">
                    @csrf 

                    @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                    @endforeach 
                    <script>
                      @if(Session::has('message'))
                          var type = "{{ Session::get('alert-type', 'info') }}";
                          switch(type){
                              case 'info':
                                  toastr.info("{{ Session::get('message') }}");
                                  break;

                              case 'warning':
                                  toastr.warning("{{ Session::get('message') }}");
                                  break;

                              case 'success':
                                  toastr.success("{{ Session::get('message') }}");
                                  break;

                              case 'error':
                                  toastr.error("{{ Session::get('message') }}");
                                  break;
                          }
                        @endif
                      </script>   

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="exampleInputPassword1" class="col-md-2 col-form-label text-md-right">Current Password:</label>
                            <div class="col-md-9">
                                <input type="password" name="current_password" class="form-control" id="password" placeholder="Current Password" aria-invalid="false" aria-describedby="exampleInputPassword1-error">
                                <span id="exampleInputPassword1-error" class="error invalid-feedback" style="display: none;"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputPassword1" class="col-md-2 col-form-label text-md-right">New Password:</label>
                            <div class="col-md-9">
                                <input type="password" name="new_password" class="form-control" id="new_password" placeholder="New Password" aria-invalid="false" aria-describedby="exampleInputPassword2-error">
                                <span id="exampleInputPassword2-error" class="error invalid-feedback" style="display: none;"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputPassword1" class="col-md-2 col-form-label text-md-right">Confirm New Password:</label>
                            <div class="col-md-9">
                                <input type="password" name="new_confirm_password" class="form-control" id="new_confirm_password" placeholder="Confirm New Password" aria-invalid="false" aria-describedby="exampleInputPassword3-error">
                                <span id="exampleInputPassword3-error" class="error invalid-feedback" style="display: none;"></span>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <!-- <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div> -->
                    <div class="card-footer">
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <a href="{{url()->previous()}}" class="btn btn-secondary">Cancel</a> 
                                <button type = "submt" class = "btn btn-success toastrDefaultSuccess">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>    
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection