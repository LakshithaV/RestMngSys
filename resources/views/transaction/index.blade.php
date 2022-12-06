@extends('dashboard.header')

@section('content')
    
<div class="content" id="rest">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">

                                <br>

                                
                                <div class="content table-responsive table-full-width">
                                
                                    <table class='table table-hover'>
                                        <thead>
                                            <th>Order Id</th>
                                            <th>Date</th>
                                            <th>Paid Amount</th>
                                            <th>Transaction Amount</th>
                                            <th>Balance</th>
                                            <th>Employee Name</th>
                                            <th>Payment Method</th>
                                        </thead>
                                        
                                        <tbody>
                                        @foreach($transacts as $trans)
                                        <tr>
                                            <td>{{ $trans->order_id }}</td>
                                            <td>{{ $trans->transac_date }}</td>
                                            <td>{{ $trans->paid_amount }}</td>
                                            <td>{{ $trans->transac_amount }}</td>
                                            <td>{{ $trans->balance }}</td>
                                            <td>{{ $trans->firstname }}</td>
                                            <td>{{ $trans->payment_method }}</td> 
                                        </tr>
                                        @endforeach
        
                                    </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
@endsection

