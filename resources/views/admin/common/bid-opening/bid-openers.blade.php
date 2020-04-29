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
                    <dl class="row">
                      <dt class="col-sm-3">Tender ID :</dt>
                      <dd class="col-sm-9">{{$projects->id}}</dd>

                      <dt class="col-sm-3">Description :</dt>
                      <dd class="col-sm-9">{{$projects->description}}</dd>
                      
                      <dt class="col-sm-3">Bid Opening Date & Time :</dt>
                      <dd class="col-sm-9">{{Carbon\Carbon::parse($projects->opening_date)->format('d-M-Y h:i:s A')}}</dd>
                    </dl>
                 </div> 
            </div>
        </div>  
    </div>
</section>
@endsection