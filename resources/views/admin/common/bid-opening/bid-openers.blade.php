@extends('admin.common.bid-opening.base')

@section('title')
<title>BIMS | BID OPENERS</title>
@endsection

@section('bidOpeningMenuOpen', 'menu-open')
@section('bidOpeningOptionActive', 'active')
@section('tendersLinkActive', 'active')

@section('bidOpening', 'Bid Openers')

@section('action-content')
<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                     <div class="callout callout-info">
                        <dl>
                            <div class="row">
                                <dt class="col-sm-3 text-sm-right">Tender ID :</dt>
                                <dd class="col-sm-4 text-sm-left">{{$projects->id}}</dd>
                            </div>
                            <div class="row">
                                <dt class="col-sm-3 col-form-label text-sm-right">Description:</dt>
                                <dd class="col-sm-4 col-form-label text-sm-left">{{$projects->description}}</dd>
                            </div>
                            <div class="row">
                                <dt class="col-sm-3 col-form-label text-sm-right">Bid Opening Date & Time :</dt>
                                <dd class="col-sm-4 col-form-label text-sm-left">{{Carbon\Carbon::parse($projects->opening_date)->format('d-M-Y h:i:s A')}}</dd>
                            </div>
                        </dl>
                     </div> 
                </div>
            </div>  
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="card card-info card-outline">  
                    <div class="card-header">
                        <h3 class="card-title">Bid Openers</h3>  
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                            @foreach($admins as $admin)
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-primary">
                                        <div class="inner">
                                            @if ($admin->role == "BAC")
                                                <h5>BID AND AWARDS COMMITEE</h5>
                                            @elseif ($admin->role == "TWG")
                                                <h5>TECHNICAL WORKING GROUP</h5>
                                            @endif
                                            <p>{{ $admin->first_name}} {{$admin->middle_name}} {{$admin->last_name}}</p>
                                        </div>
                                              
                                        <div class="icon">
                                            <i> <img src="/storage/avatars/{{ $admin->avatar }}" width="80 " height="80" class="center"></i>
                                        </div>
                                        <a class="small-box">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            @endforeach 
                        </div>
                    </div>
                </div>
            </div>  
        </div>
</section>
@endsection