@extends('bac.user-management.base')

@section('action-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
            
            <div class="card">
                <div class="card-header">Bidder List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Email</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                    
                        @foreach($users as $user)
                            <tr>
                                <th></th>
                                <th>{{$user->first_name}}</th>
                                <th>{{$user->last_name}}</th>
                                <th>{{$user->email}}</th>
                                <th>
                                    @if($user->account_status == 0) 
                                        Deactivated
                                    @else 
                                        Activated
                                    @endif</th>
                                    
                                <th><a href="{{ route('account_status',['id' => $user->id])}}">
                                    
                                    @if($user->account_status == 0) 
                                      Activate 
                                    @else 
                                      Deactivate 
                                      
                                    @endif</a></th>
                             </tr>

                           @endforeach

                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection