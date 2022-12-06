@extends('dashboard.header')

@section('content')
    
<div class="content" id="rest">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Order ID : </strong>
                        {{$order->id}} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Customer Name : </strong>
                        {{$order->name}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Customer Phone : </strong>
                        {{$order->phone}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Order Details : </strong>
                        <div class="content table-responsive table-full-width">
                                
                            <table class='table table-hover'>
                                <thead>
                                    <th>Product Id</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Amount</th>
                                </thead>
                                
                                <tbody>
                                    @foreach($orderDetails as $order)
                                <tr>
                                    <td>{{ $order->product_id }}</td>
                                    <td>{{ $order->foodname }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>{{ $order->unitprice }}</td>
                                    <td>{{ $order->amount }}</td>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="btn btn-primary">
                   <a href="{{url('showOrders')}}" Type="button">Back</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection


