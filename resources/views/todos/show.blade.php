<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Todos item</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">
            {{ $todo->name }}
        </h1>
        <div class="row justify-content-center">
            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    {{$todo->description}}
                </div>
            </div>
        </div>
    </div>
   
</body>

</html>
