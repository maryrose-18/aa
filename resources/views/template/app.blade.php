<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Japan</title>

    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/template.css')}}" rel="stylesheet">
    <link href="{{asset('css/body.css')}}" rel="stylesheet">
</head>
<body class="my-body">
    @include('template.header')
    <div class="content-container">
        @include('template.navigation')
        @yield('content')   
    </div>

    <script> const _TOKEN = "{{csrf_token()}}"; </script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    @yield('custom_js')

</body>
</html>