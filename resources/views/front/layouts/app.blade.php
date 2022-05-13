<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <title>Chain App Dev - App Landing Page HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href={{ asset('bootstrap/css/bootstrap.min.css') }} rel="stylesheet">

    <!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/templatemo-chain-app-dev.css') }}>
    <link rel="stylesheet" href={{ asset('css/animated.css') }}>
    <link rel="stylesheet" href={{ asset('css/owl.css') }}>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>

</head>

<body>
    
    {{-- Success Message --}}
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    @yield('content')

    <!-- Scripts -->
    <script src={{ asset('jquery/jquery.min.js') }}></script>
    <script src={{ asset('bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('js/owl-carousel.js') }}></script>
    <script src={{ asset('js/animation.js') }}></script>
    <script src={{ asset('js/imagesloaded.js') }}></script>
    <script src={{ asset('js/popup.js') }}></script>
    <script src={{ asset('js/custom.js') }}></script>
</body>

</html>
