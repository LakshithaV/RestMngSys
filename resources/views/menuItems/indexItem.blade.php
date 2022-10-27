@extends('dashboard.header')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="content">
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

                            <div class = "table-responsive">
                                <table class = "table">
                                    <thead>
                                        <tr>
                                            <td>Id</td>
                                            <td>FoodName</td>
                                            <td>Category</td>
                                            <td>Price</td>
                                            <td>Staus</td>
                                            <td>Description</td>
                                            <td>Images</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Menuitems as $item)
                                        <tr>
                                            <td>{{$loop -> iteration}}</td>
                                            <td>{{$item -> foodname}}</td>
                                            <td>{{$item -> category}}</td>
                                            <td>{{$item -> price}}</td>
                                            <td>{{$item -> status}}</td>
                                            <td>{{$item -> description}}</td>
                                            <td>
                                                <img src="{{asset('app/public/images'.$item->image)}}" class = "img img-responsive"/>
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
</div>
@endsection

