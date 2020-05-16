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
                    <!-- row for BAC openers -->
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-dark">
                                    <div class="inner">
                                        <h5>BID AND AWARDS COMMITEE</h5>
                                        <p>{{ Auth::user()->first_name}} {{ Auth::user()->middle_name}} {{ Auth::user()->last_name}}</p>
                                    </div>
                                          
                                    <div class="icon">
                                        <i> <img src="{{ asset('dist/img/KZ.jpg') }}" width="80 " height="80" class="center" alt="User Image"></i>
                                    </div>
                                    <a class="small-box">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-dark">
                                    <div class="inner">
                                        <h5>BID AND AWARDS COMMITEE</h5>
                                        <p>{{ Auth::user()->first_name}} {{ Auth::user()->middle_name}} {{ Auth::user()->last_name}}</p>
                                    </div>
                                          
                                    <div class="icon">
                                        <i> <img src="{{ asset('dist/img/avatar2.png') }}" width="80 " height="80" class="center" alt="User Image"></i>
                                    </div>
                                    <a class="small-box">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-dark">
                                    <div class="inner">
                                        <h5>BID AND AWARDS COMMITEE</h5>
                                        <p>{{ Auth::user()->first_name}} {{ Auth::user()->middle_name}} {{ Auth::user()->last_name}}</p>
                                    </div>
                                          
                                    <div class="icon">
                                        <i> <img src="{{ asset('dist/img/avatar3.png') }}" width="80 " height="80" class="center" alt="User Image"></i>
                                    </div>
                                    <a class="small-box">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-dark">
                                    <div class="inner">
                                        <h5>BID AND AWARDS COMMITEE</h5>
                                        <p>{{ Auth::user()->first_name}} {{ Auth::user()->middle_name}} {{ Auth::user()->last_name}}</p>
                                    </div>
                                          
                                    <div class="icon">
                                        <i> <img src="{{ asset('dist/img/avatar4.png') }}" width="80 " height="80" class="center" alt="User Image"></i>
                                    </div>
                                    <a class="small-box">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>  
                        </div>

                        <!-- row for TWG openers -->
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-dark">
                                    <div class="inner">
                                        <h5>TECHNICAL WORKING GROUP</h5>
                                        <p>{{ Auth::user()->first_name}} {{ Auth::user()->middle_name}} {{ Auth::user()->last_name}}</p>
                                    </div>
                                          
                                    <div class="icon">
                                        <i> <img src="{{ asset('dist/img/eva.jpg') }}" width="80 " height="80" class="center" alt="User Image"></i>
                                    </div>
                                    <a class="small-box">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-dark">
                                    <div class="inner">
                                        <h5>TECHNICAL WORKING GROUP</h5>
                                        <p>{{ Auth::user()->first_name}} {{ Auth::user()->middle_name}} {{ Auth::user()->last_name}}</p>
                                    </div>
                                          
                                    <div class="icon">
                                        <i> <img src="{{ asset('dist/img/avatar5.png') }}" width="80 " height="80" class="center" alt="User Image"></i>
                                    </div>
                                    <a class="small-box">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-dark">
                                    <div class="inner">
                                        <h5>TECHNICAL WORKING GROUP</h5>
                                        <p>{{ Auth::user()->first_name}} {{ Auth::user()->middle_name}} {{ Auth::user()->last_name}}</p>
                                    </div>
                                          
                                    <div class="icon">
                                        <i> <img src="{{ asset('dist/img/avatar5.png') }}" width="80 " height="80" class="center" alt="User Image"></i>
                                    </div>
                                    <a class="small-box">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</section>
@endsection