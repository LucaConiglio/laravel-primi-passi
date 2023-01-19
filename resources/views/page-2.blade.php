<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>primi passi LARAVEL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    
    <h1 class="text-center text-info my-5 py-5 ">Hello</h1>
    <div><h2  class="text-center">{{$user}}</h2></div>
    <div><p class="text-center">residente in {{$indirizzo}} {{$numero}}</p></div>
    <div>
      <ul class="d-flex justify-content-center align-items-center flex-column pt-3">
        @foreach ($information as  $info)
        <li class="">{{$info}}</li>
        @endforeach
      </ul>
    </div>
    <div class="container d-flex justify-content-center pt-5">
        <a class="btn btn-dark" href="{{route('home')}}">Ritorna alla pagina principale!</a>
        
    </div>



</body>
</html>
