<!DOCTYPE html>
<html lang="en">
<head>
<title>Nyeri Law Courts</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{ asset('css/bacend_css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-media.css')}}" />
<link href="font-awesome/{{ asset('fonts/backend_fonts/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/backend_css/jquery.gritter.css')}}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

@include('layouts.adminLayout.admin_header')
@include('layouts.adminLayout.admin_sidebar')


@yield('content')

@include('layouts.adminLayout.admin_footer')


</body>
</html>
