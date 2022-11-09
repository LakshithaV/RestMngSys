@extends('dashboard.header')

@section('content')
    
<div class="content" id="rest">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">

                                <br>

                                @if($message = Session::get('error'))
                                <div class='error'>
                                    <strong> {{$message}} </strong>
                                </div>
                                @endif

                                @if($message = Session::get('success'))
                                    <div class="success">
                                        <strong> {{$message}} </strong>
                                    </div>
                                @endif
                                <br>
                                <a class="btn btn-secondary" href="{{route('users.create')}}"> Create New Employee</a>
                                
                                <div class="content table-responsive table-full-width">
                                
                                    <table class='table table-hover'>
                                        <thead>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Gender</th>
                                            <th>Role</th>
                                            <th>Salary</th>
                                            <th>Actions</th>
                                        </thead>
                                        
                                        <tbody>
                                        @foreach($employees as $emp)
                                        <tr>
                                            <td>{{ $emp->firstname }}</td>
                                            <td>{{ $emp->lastname }}</td>
                                            <td>{{ $emp->email }}</td>
                                            <td>{{ $emp->phone }}</td>
                                            <td>{{ $emp->address }}</td>
                                            <td>{{ $emp->gender }}</td>
                                            <td>{{ $emp->role }}</td>
                                            <td>{{ $emp->salary }}</td>
                                            <td>
                                                <form action="{{route('users.destroy',$emp->id)}}" method="POST">
   
                                                    <a class="btn btn-info" href="{{route('users.show',$emp->id)}}">Show</a>

                                                    <a class="btn btn-primary" href="{{route('users.edit',$emp->id)}}">Edit</a>

                                                    @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>

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

