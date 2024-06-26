<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Todos App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/todos/">Todos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/new-todos/">Create Todos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/send-email/">Send Email</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


    <div class="container">
      @if (session()->has('success'))
      <div class="alert alert-success">
        {{session()->get('success')}}
      </div>
      <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".alert-success").fadeOut("slow");
            }, 3000); // Thay đổi 5000 (5 giây) bằng số miligiây bạn muốn thông báo hiển thị
        });
        </script>
      @endif
        @yield('content')
    </div>
</body>
</html>