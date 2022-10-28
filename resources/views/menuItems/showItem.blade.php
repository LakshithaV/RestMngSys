'foodname',
        'status',
        'price',
        'description',
        'category',
        'image',
        'quantity',
        'alert_stock',

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
                        {{$fooditem->foodname}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Last Name : </strong>
                        {{$fooditem->lastlame}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email : </strong>
                        {{$fooditem->email}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Phone : </strong>
                        {{$fooditem->phone}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address : </strong>
                        {{$fooditem->address}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender : </strong>
                        {{$fooditem->gender}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role : </strong>
                        {{$fooditem->role}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Salary : </strong>
                        {{$fooditem->salary}}
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
