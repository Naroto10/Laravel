<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- fin b9a iwrt css = public/css/app.css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <!-- ht or srs dadkh or da3 houna -->
    @yield('content')

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>