@extends('admin.common.layouts.app-template')

@section('content')
  <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Bid Opening</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Bid Opening</a></li>
                    <li class="breadcrumb-item active">@yield('bidOpening')</li>
                  </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
  </div>
  @yield('action-content')
@endsection