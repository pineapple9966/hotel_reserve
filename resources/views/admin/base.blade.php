<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理画面</title>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    @yield('javascript')
</head>
<body>
    <h1>Hotel Reserve Admin</h1>
    <hr>
    <div class="row">
        <div class="col-3">
            <ul>
                <li><a href="{{ route('admin.hotels.index') }}">ホテル一覧</a></li>
            </ul>
        </div>
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>