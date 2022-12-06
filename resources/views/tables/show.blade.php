@extends('dashboard.header')

@section('content')
    
@extends('dashboard.header')

@section('content')
    
<div class="content" id="rest">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Table No : </strong>
                            {{$table->id}} 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Table Status : </strong>
                            {{$table->Status}} 
                        </div>
                    </div><div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Table Type : </strong>
                            {{$table->TableType}} 
                        </div>
                    </div>
                
                

                    <a class="btn btn-primary" href="{{route('tables.index')}}" Type="button">Back</a>
                    <a class="btn btn-danger" href="{{ url('Occupied', $table->id) }}">Occupied</a>
                    <a class="btn btn-info" href="{{ url('Available', $table->id) }}">Available</a>

            </div>
        </div>
    </div>
</div>
@endsection

  

@endsection
