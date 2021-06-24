<!DOCTYPE html>
<html>
<head>
    <title>{{env('APP_NAME')}}</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body>

<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo right">{{env('APP_NAME')}}</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('todo.index')}}">Todo</a></li>
        </ul>
    </div>
</nav>


@yield('content')



<!--JavaScript at end of body for optimized loading-->
{{--<script type="text/javascript" src="js/materialize.min.js"></script>--}}
</body>
</html>
