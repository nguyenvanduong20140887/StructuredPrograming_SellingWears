<!DOCTYPE html>
<html>
<head>
	<title>Selling Wears</title>
	<meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="{!!  asset('css/bootstrap.min.css') !!}"> -->

    <link rel="stylesheet" type="text/css" href="{!! asset('css/masterstyle.css') !!}">

    <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app.css') !!}">
</head>
<body>
	<div id="header"> 
        <span class="signboard"></span>
        <ul id="infos" class="header_left">
            <li class="home">
                <a href="{!! route('home') !!}">HOME</a>
            </li>
        </ul>
        <ul id="infos" class="header_right">
            <li class="">
                <a href="#">Login</a>
            </li>
            <li class="">
                <a href="#">Register</a>
            </li>
            <li class="">
                <a href="{!! route('order') !!}">Cart</a>
            </li>
        </ul>
    </div>
	@yield('content')
	<div id="footer" class="container"> <!-- start of footer -->
        <div>
            <ul class="navigation">
                <li><a href="{!! route('welcome') !!}">Home</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
    </div>
	<script type="text/javascript" src="{!! asset('js/app.js') !!}" ></script>
	@yield('script')
</body>
</html>