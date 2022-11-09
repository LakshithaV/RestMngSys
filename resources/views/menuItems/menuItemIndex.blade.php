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
                                <a class="btn btn-secondary" href="{{route('menu_items.create')}}"> Add new Food</a>
                                
                                <div class="content table-responsive table-full-width">
                                
                                    <table class='table table-hover'>
                                        <thead>
                                            <td>Id</td>
                                            <td>Foodname</td>
                                            <td>Category</td>
                                            <td>Price</td>
                                            <td>Staus</td>
                                            <td>Description</td>
                                            <td>quantity</td>
                                            <td>alert_stock</td>
                                            <td>Images</td>
                                            <td>Actions</td>
                                        </thead>
                                        
                                        <tbody>
                                        @foreach($menuitems as $menuitem)
                                        <tr>
                                            <td>{{ $menuitem->id }}</td>
                                            <td style="max-width: 100px;">{{ $menuitem->foodname }}</td>
                                            <td>{{ $menuitem->category }}</td>
                                            <td>{{ $menuitem->price }}</td>
                                            <td>{{ $menuitem->status }}</td>
                                            <td style="max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $menuitem->description }}</td>
                                            <td>{{ $menuitem->quantity }}</td>
                                            <td>@if( $menuitem->alert_stock >= $menuitem->quantity ) <span class="badge badge-danger">Low Stock</span>
                                                @else<span class="badge badge-success">{{ $menuitem->alert_stock }}</span>
                                                @endif
                                            </td>
                                            <td ><img src="{{asset('images/'.$menuitem->image)}}" class="card-img-top" height="10%" width="30px"></td>
                                            <td>
                                                <form action="{{route('menu_items.destroy',$menuitem->id)}}" method="POST">
   
                                                    <a class="btn btn-info" href="{{route('menu_items.show',$menuitem->id)}}">Show</a>

                                                    <a class="btn btn-primary" href="{{route('menu_items.edit',$menuitem->id)}}">Edit</a>

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

