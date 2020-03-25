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
                                <th>#</th>
                                <th>Company</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php $no = 1; ?>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$user->company_name}}</td>
                                <td>{{$user->last_name}} {{$user->first_name }}, {{$user->middle_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
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
                                      
                                    @endif</a></th>
                             </tr>

                           @endforeach

                    </table>    

                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection