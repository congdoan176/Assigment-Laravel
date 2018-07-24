<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('layout/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('layout/vendor/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('layout/dist/css/sb-admin-2.css')}}">
    <link rel="stylesheet" href="{{asset('layout/vendor/datatables-plugins/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('layout/vendor/datatables-responsive/dataTables.responsive.css')}}">
    <link rel="stylesheet" href="{{asset('layout/vendor/morrisjs/morris.css')}}">
    <link rel="stylesheet" href="{{asset('layout/vendor/font-awesome/css/font-awesome.min.css')}}">
    <title>Admin Bakery</title>
</head>
<body>
<div id="wrapper">

    @include('admin.layout.header')

    @yield('content')

</div>

{{--Thư viện script--}}
<script src="{{asset('layout/vendor/jquery/jquery.min.js')}}"></script>

<script src="{{asset('layout/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('layout/vendor/metisMenu/metisMenu.min.js')}}"></script>

{{--<script src="{{asset('layout/vendor/raphael/raphael.min.js')}}"></script>--}}
{{--<script src="{{asset('layout/vendor/morrisjs/morris.min.js')}}"></script>--}}
{{--<script src="{{asset('layout/data/morris-data.js')}}"></script>--}}

<!-- Custom Theme JavaScript -->
<script src="{{asset('layout/dist/js/sb-admin-2.js')}}"></script>
@yield('script')
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
</body>
</html>