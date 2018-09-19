<!DOCTYPE html>
<html>
<head>
<title>Laravel 5.5 CRUD Application</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>

<body>

 @if(isset(Auth::user()->id))
<div style="font-family: 'Montserrat', sans-serif;" class="container">
    @yield('content')
</div>

@else
   <p id="nav_p"> <img class="img-fluid"  src="/image/logo.png"> </p>
    <p style="text-align: center; font-size: 25px;">Markowa Kuchnia - chwilka, chwilka! Wstęp ma tylko kucharz!</p>
    
@endif

</body>
</html>