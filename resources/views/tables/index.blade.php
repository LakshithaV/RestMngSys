@extends('dashboard.header')

@section('content')
    
<style>


    .zoom:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12), 0 4px 8px rgba(0, 0, 0, 0.09);
    }
    
    .zoom {
      cursor: pointer;
      border-radius: 4px;
    
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.08), 0 0 6px rgba(0, 0, 0, 0.05);
      transition: 0.3s transform cubic-bezier(0.155, 1.105, 0.295, 1.12),
        0.3s box-shadow,
        0.3s -webkit-transform cubic-bezier(0.155, 1.105, 0.295, 1.12);
    }
    
    .pqrs{
      margin: 1rem;
      height: 8rem;
      width: 25rem;
      text-align: center;
    }
    
    
  </style>

    @foreach($tables as $table)
    <a href="{{route('tables.show',$table->id)}}">
      @if($table->Status == 'Available')
        <div class="col-md-4 pqrs zoom " style="background-color: rgba(0, 255, 0, 0.26);">
          <h1 style="color: black; font-size:40px">Table {{ $table->id }}</h1>
        </div>
        @else
        <div class="col-md-4 pqrs zoom " style="background-color: rgba(255, 0, 0, 0.26);">
          <h1 style="color: black; font-size:40px">Table {{ $table->id }}</h1>
        </div>
      @endif
      
    </a>
    @endforeach
  

@endsection
