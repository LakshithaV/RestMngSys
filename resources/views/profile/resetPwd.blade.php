@extends('dashboard.header')

@section('content')
    


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="content">
                        <h4>Reset your Password</h4>
                            <form action="{{ url('resetPwdDB') }}" method="POST">
                                @csrf

                                <!-- Authentication Error -->
                                @if($message = Session::get('error'))
                                    <div>
                                        <strong> {{$message}} </strong>
                                    </div>
                                @endif

                                @if($message = Session::get('success'))
                                    <div>
                                        <strong> {{$message}} </strong>
                                    </div>
                                @endif

                                <!-- Validation Error -->
                                @if ($errors->any())
                                <div>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br/>
                                @endif

                                <div>
                                    <label>Current Password:</label>
                                    <input type='password' name='oldPassword'>
                                </div>
                                <div>
                                    <label>New Password:</label>
                                    <input type='password' name='newPassword'>
                                </div>
                                <div>
                                    <label>Confirm new Password:</label>
                                    <input type='password' name='confirmPassword'>
                                </div>
                                <button type='submit' name='change'>Change</button><br/>
                            </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection