@extends('dashboard.header')

@section('content')
    
<div class="content" id="rest">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name : </strong>
                        {{$menuItem->foodname}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status : </strong>
                        {{$menuItem->status}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Price : </strong>
                        {{$menuItem->price}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description : </strong>
                        {{$menuItem->description}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Category : </strong>
                        {{$menuItem->category}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Quantity : </strong>
                        {{$menuItem->quantity}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alert Stock : </strong>
                        {{$menuItem->alert_stock}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image : </strong>
                        <img src="{{asset('images/'.$menuItem->image)}}" class="card-img-top" height="30%" width="250px">
                    </div>
                </div>
                

                <div class="btn btn-primary">
                   <a href="{{route('users.index')}}" Type="button">Back</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
