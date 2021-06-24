<html>
<head>
    <title>Login</title>
{{--    <title>{{env('APP_NAME')}}</title>--}}
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
<div class="  min-h-screen flex justify-center items-center">
            <form class=" shadow rounded  w-1/3 " action="{{ route('login') }}" method="post">
                @csrf
                <div class=" w-full flex justifycenter">
                    <h3>Login</h3>
                </div>
                <label for="name">User name/E-mail:</label> <br>
                <input type="text" name="name"> <br>
                <label for="password"></label> <br>
                <input type="password" name="password"> <br>
                <button type="submit" class="btn">Login</button>
            </form>

</div>
</body>
</html>
