<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>toastr</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/toastr.css')}}">
</head>
<body>
    <div class="container">
            <header>
                    <h2>usuarios registrados </h2>
                    </header>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                         
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $users)
                          <tr>
                            <th scope="row">{{ $users->id}}</th>
                            <td>{{ $users->email}}</td>
                            <td>editar</td>
                            <td>
                                {{ Form::open(['route'=>['user.destroy',$users->id], 'method'=>'delete']) }}
                                {{ Form::submit('eliminar', ['class'=>'btn btn-danger']) }}
                                {{ Form::close() }}
                            </td>
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
                      {{ $user->links() }}
    </div>

    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/toastr.min.js')}}"></script>

    {!! Toastr::message()!!}
</body>
</html>