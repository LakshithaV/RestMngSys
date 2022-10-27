@extends('dashboard.header')

@section('content')
    
<!-- Reservations -->
<div class="content" id="rest">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Reservation List</h4>
                    </div>
                    <div class="content table-responsive table-full-width">
                        
                        <table class='table table-hover'>
                            <thead>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>No of Guests</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Seating Type</th>
                                <th>Occasion</th>
                                <th>Request</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach($records as $record)
                                <tr>
                                    <td>{{ $record->firstName }}</td>
                                    <td>{{ $record->lastName }}</td>
                                    <td>{{ $record->people }}</td>
                                    <td>{{ $record->email }}</td>
                                    <td>{{ $record->phone }}</td>
                                    <td>{{ $record->date }}</td>
                                    <td>{{ $record->time }}</td>
                                    <td>{{ $record->seatingType }}</td>
                                    <td>{{ $record->occasion }}</td>
                                    <td>{{ $record->request }}</td>
                                    <td>{{ $record->action }}</td>
                                    <td><a href="{{ url('Done', $record->id) }}"><button class="btn btn-fill" style="background: #09f119; color: #020005; font-size: 10px; padding: 5px 5px;">Done</button></a>
                                        <a href="{{ url('Confirm', $record->id) }}"><button class="btn btn-fill" style="background: #f6ee06; color: #020005; font-size: 10px; padding: 5px 5px;">Confirm</button></a>
                                        <a href="{{ url('Cancelled', $record->id) }}"><button class="btn btn-fill" style="background: #e90a0a; color: #020005; font-size: 10px; padding: 5px 5px;">Cancel</button></a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>                    

        </div>
    </div>
</div>
@endsection

