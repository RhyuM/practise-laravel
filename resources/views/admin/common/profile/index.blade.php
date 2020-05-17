@extends('admin.common.profile.base')

@section('title')
<title>BIMS | admin PROFILE</title>
@endsection

@section('action-content')
<section class="content">
      <div class="container-fluid">
          <div class="row">
                <div class="col-md-12">
                  <div class="card card-primary">
                      <div class="card-header"> 
                        <h3 class="card-title"></h3>
                      </div>
                            <div class="card-body">
                            <div class="row">
                            @if ($message = Session::get('success'))

                                <div class="alert alert-success alert-block">

                                    <button type="button" class="close" data-dismiss="alert">×</button>

                                    <strong>{{ $message }}</strong>

                                </div>

                            @endif

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="row justify-content-center">

                            <div class="profile-header-container">
                                <div class="profile-header-img">
                                    <img class="rounded-circle" src="/storage/avatars/{{$admin->avatar}}"width="200px" height="200px"/>
                                    <!-- badge -->
                                    <div class="rank-label-container">
                                        <span class="label label-default rank-label">{{$admin->first_name}}{{$admin->last_name}}{{$admin->middle_name}}</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row justify-content-center">
                            <form action="/profile" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                            </div>
                      </div>
                  </div>
                <div class="col-md-6">   
          </div>
      </div>

</section>
@endsection