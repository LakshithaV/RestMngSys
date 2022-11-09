@extends('dashboard.header')

@section('content')
    

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="content">

                        <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Validation Error -->
                            @if ($errors->any())
                            <div class='error'>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br/>
                            @endif

                            <!-- Authentication Error -->
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

                            <div>
                                <h4 style="border-bottom: 1px solid #7722ff;">
                                    Creating a new Employee</h4>
                            </div>

                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Enter first name" autofocus>
                            </div>
    
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Enter last name" autofocus>
                            </div>
    
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter the email">
                            </div>
    
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter the password">
                            </div>
    
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter phone number" autofocus>
                            </div>
    
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Enter the address">
                            </div>
                            
                            
                            <div class="form-group">
                                <label >Gender </label>
                                <select name="gender" class="form-control">
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                </select>
                            </div>
    
                            <div class="form-group">
                                <label >Role </label>
                                <select name="role" class="form-control">
                                    <option value="manager">Manager</option>
                                    <option value="chef">Chef</option>
                                    <option value="waiter">Waiter</option>
                                </select>
                            </div>
    
                            <div class="form-group">
                                <label>Salary</label>
                                <input type="text" name="salary" class="form-control" placeholder="">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" value="save">Add New Employee</button>
                            </div>

                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection