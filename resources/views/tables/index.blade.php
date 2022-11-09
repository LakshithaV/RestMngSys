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
    }
    
    
       </style>
       <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <div routerLink="/Admin-show-wardpage/614ed870a24b974fc05038dc" class="col-3 card pqrs zoom d-flex justify-content-center d-flex align-items-center" style="background-color: rgba(255, 0, 128, 0.26);">
            <h1 style="font-family: Lemon" >Ward 2</h1>
          </div>

@endsection