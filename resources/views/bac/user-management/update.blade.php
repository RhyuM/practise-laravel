<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
            
            <div class="card">
                <div class="card-header">Bidder Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <td>First Name</td>
                                <td>Email</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        
                            @foreach($users as $user)
                            <tr>
                                <th>{{$user->first_name}}</th>
                                <th>{{$user->email}}</th>
                                <th>@if($user->account_status == 0) 
                                        Inactive
                                    @else 
                                        Active 
                                    @endif</th>
                                <th><a href="{{ route('account_status',['id' => $user->id])}}">@if($user->account_status == 0) Inactive @else Active @endif</a></th>
                             </tr>
                             @endforeach
                </div>
            </div>
        </div>
    </div>
</div>