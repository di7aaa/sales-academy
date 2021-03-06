<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- googleFonts --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    {{-- custom style --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>{{env('APP_NAME','Sales Academy')}}</title>
    </title>
</head>

<body>
    @include('includes.navbar')
<div class="container">
    @yield('content')
</div>

<script src="{{asset('js/app.js')}}"></script>

</body>

</html>
