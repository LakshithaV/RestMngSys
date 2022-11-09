@extends('dashboard.header')

@section('content')
    


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="content">

                        <form method="post" action="{{ route('menu_items.update', $menuItem->id) }}" enctype="multipart/form-data">
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
                                    Edit a Product</h4>
                            </div>

                            <div class="form-group">
                                <label>Food Name</label>
                                <input type="text" name="foodname" class="form-control" value="{{$menuItem->foodname}}" autofocus>
                            </div>

                            <div class="form-group">
                                <label>Status </label>
                                <select name="status" class="form-control">
                                    <option value="available">Available</option>
                                    <option value="unavailable">Unavailable</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control" value="{{$menuItem->price}}">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control" value="{{$menuItem->description}}">
                            </div>

                            <div class="form-group">
                                <label>Category </label>
                                <select name="category" class="form-control">
                                    <option value="dessert">Dessert</option>
                                    <option value="cake">Cake</option>
                                    <option value="pizza">Pizza</option>
                                    <option value="maincourses">Maincourses</option>
                                    <option value="breakfast">Breakfast</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" name="quantity" class="form-control" value="{{$menuItem->quantity}}">
                            </div>
                            
                            <div class="form-group">
                                <label>Alert Stock</label>
                                <input type="text" name="alert_stock" class="form-control" value="{{$menuItem->alert_stock}}">
                            </div>

                            
                            <div class="form-group">
                                <strong>Image : </strong>
                                <img src="{{asset('images/'.$menuItem->image)}}" class="card-img-top" height="30%" width="250px">
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>
                            

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" value="save">Edit Product</button>
                            </div>

                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection