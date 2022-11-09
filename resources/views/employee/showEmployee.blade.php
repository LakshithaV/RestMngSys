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
                        {{$user->firstname}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Last Name : </strong>
                        {{$user->lastlame}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email : </strong>
                        {{$user->email}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Phone : </strong>
                        {{$user->phone}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address : </strong>
                        {{$user->address}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender : </strong>
                        {{$user->gender}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role : </strong>
                        {{$user->role}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Salary : </strong>
                        {{$user->salary}}
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
