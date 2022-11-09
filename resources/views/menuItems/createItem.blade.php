@extends('dashboard.header')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="content">

                        <form method="post" action="{{ route('menu_items.store') }}" enctype="multipart/form-data">
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
                                    Add Food</h4>
                            </div>

                            <div class="form-group">
                                <label>Food Name </label>
                                <input type="text" name="foodname" class="form-control" placeholder="Enter food name" autofocus>
                            </div>

                            <div class="form-group">
                                <label >Price </label>
                                <input type="text" name="price" class="form-control" placeholder="Enter price" autofocus>
                            </div>

                            

                            <div class="form-group">
                                <label>Description</label><br>
                                <textarea name="description" rows="4" cols="50" placeholder="Enter Description" autofocus> </textarea>
                            </div>

                            <div class="form-group">
                                <label>Status </label>
                                <select name="status" class="form-control">
                                    <option value="available">Available</option>
                                    <option value="unavailable">Unavailable</option>
                                </select>
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
                                <label >Quantity </label>
                                <input type="text" name="quantity" class="form-control" placeholder="Enter quantity" autofocus>
                            </div>

                            <div class="form-group">
                                <label >Alert  Stock </label>
                                <input type="text" name="alert_stock" class="form-control" placeholder="Enter price" autofocus>
                            </div>

                            <div class="form-group"> 
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" value="save">Add new Food</button>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


