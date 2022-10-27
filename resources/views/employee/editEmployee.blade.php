@extends('dashboard.header')

@section('content')
    


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="content">

                        <form method="post" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
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
                                    Edit an Employee</h4>
                            </div>

                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" class="form-control" value="{{$user->firstname}}" autofocus>
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" class="form-control" value="{{$user->lastname}}" autofocus>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{$user->email}}">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control" value="{{$user->password}}">
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{$user->phone}}" autofocus>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" value="{{$user->address}}">
                            </div>
                            
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" name="gender" class="form-control" value="{{$user->gender}}">
                            </div>

                            <div class="form-group">
                                <label>Role</label>
                                <input type="text" name="role" class="form-control" value="{{$user->role}}">
                            </div>

                            <div class="form-group">
                                <label>Salary</label>
                                <input type="text" name="salary" class="form-control" value="{{$user->salary}}">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" value="save">Edit Employee</button>
                            </div>

                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection