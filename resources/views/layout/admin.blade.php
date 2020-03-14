<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larafile Admin Panel</title>
    
    <link href="{{asset ('/css/custom.css" rel="stylesheet')}}" rel="stylesheet">
    <link href="{{asset ('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset ('/css/bootstrap-rtl.min.css')}}" rel="stylesheet">


</head>
<body>
@include('admin.partial.nav')
<div class="container" style="background-color: #3d6983" >
    <div class="row">
        <div class="col-md-12 col-xs-12">
            @yield('content')
        </div>

    </div>
</div>



{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>--}}
<script src="/css/js/bootstrap.min.js"></script>
<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>



</body>
</html>