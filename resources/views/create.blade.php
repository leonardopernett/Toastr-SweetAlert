<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>
<body>
    

    <div class="container">
        <h1>formulario</h1>
      
        {{-- @if(session()->has('mensaje'))
            <span class="alert alert-success">
                    {{ session('mensaje')}}
            </span>
        @endif --}}

    <form action="{{ route('user.store')}}" method="POST">
        @csrf
    <div class="form-group">
        <input type="text" placeholder="name" name="name" class="form-control">
    </div>

    <div class="form-group">
        <input type="email" placeholder="email"  name="email"  class="form-control">
    </div>

    <div class="form-group">
        <input type="password" placeholder="password"   name="password" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="crear Usuario">
    </div>
    
    </form>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
</body>
</html>