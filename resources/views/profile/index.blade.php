@extends('dashboard.header')

@section('content')
    
<div class="content" id="rest">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Employee Profile</h4>
                    </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name : </strong>
                        {{ Auth::user()->firstname }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Last Name : </strong>
                        {{Auth::user()->lastname}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email : </strong>
                        {{Auth::user()->email}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Phone : </strong>
                        {{Auth::user()->phone}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address : </strong>
                        {{Auth::user()->address}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender : </strong>
                        {{Auth::user()->gender}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role : </strong>
                        {{Auth::user()->role}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Salary : </strong>
                        {{Auth::user()->salary}}
                    </div>
                </div>
                
                <div >
             
                    <a class="btn btn-danger" href="{{ url('resetPwd') }}" Type="button">Reset Password</a>
                 </div>

            </div>
        </div>
    </div>
</div>
@endsection
