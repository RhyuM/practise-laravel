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
</section>
@endsection