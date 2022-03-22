<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Materialize - Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>

    <nav class="blue">
        <div class="nav-wrapper container">
            <a href="{{ route('home') }}" class="brand-logo light">Login Breeze</a>

            {{-- Menu Desktop --}}
            <ul class="right hide-on-med-and-down">
                <li><a href=" {{route('login')}} ">Login</a></li>
                <li><a href=" {{route('register')}} ">Registre-se</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Materialize - Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>
