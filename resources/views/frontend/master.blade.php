<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>University Management System</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    @include('frontend.includes.style')
</head>

<body>
    <!-- top header -->
         @include('frontend.includes.header')
    <!--//header-->

   @yield('content')
    <!-- //about-2 section -->

    <!-- footer -->
    @include('frontend.includes.footer')
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
   @include('frontend.includes.script')
    <!-- //Js scripts -->
</body>

</html>