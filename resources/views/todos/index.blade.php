<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Todos</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Todo Page</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 offset-md-2">
            <div class="card card-default">
                <div class="card-header">
                    Todos
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos as $todo)
                 
                       <li class="list-group-item">
                           {{$todo->name}}
                       <button class="btn btn-primary btn-sm float-end">Chi tiet</button>
                    </li> 
                   @endforeach
               </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>