@extends('dashboard.header')

@section('content')
    
<div class="content" id="rest">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">

                                <br>

                                
                                <div class="content table-responsive table-full-width">

                                    @if (session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @elseif(session()->has('info'))
                                        <div class="alert alert-info">
                                            {{ session('info') }}
                                        </div>
                                    @elseif(session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
        
                                    <table class='table table-hover'>
                                        <thead>
                                            <th>Order Id</th>
                                            <th>Customer Name</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Show Order</th>
                                            <th>Action</th>
                                        </thead>
                                        
                                        <tbody>
                                        @foreach($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->name }}</td>
                                            <td>{{ $order->phone }}</td>
                                            <td>{{ $order->status }}</td>
                                            <td><a class="btn btn-info" href="{{ route('orders.show', $order->id) }}">Show</a></td>
                                            <td>
                                                    <a class="btn btn-danger" href="{{ url('cancel', $order->id) }}">Cancel</a>
                                                    <a class="btn btn-primary" href="{{ url('done', $order->id) }}">Done</a>
                                            </td>
                                        </tr>
                                        @endforeach
        
                                    </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
@endsection

