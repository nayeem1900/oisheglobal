<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Oishe Group</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Consulting Website Template Free Download" name="keywords">
    <meta content="Consulting Website Template Free Download" name="description">

    <!-- Favicon -->
    <link href="{{asset('frontend/components/img/favicon.ico')}}" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('frontend/components/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/components/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/components/css/style.css')}}" rel="stylesheet">
</head>

<body>
<!-- Top Bar Start -->
@include('frontend.layout.top_bar')
<!-- Top Bar End -->

<!-- Nav Bar Start -->
@include('frontend.layout.nav_var')
<!-- Nav Bar End -->


<!-- Carousel Start -->
{{--@include('layout.carousel')--}}
<!-- Carousel End -->

<!-- Video Modal Start-->
@include('frontend.layout.video')
<!-- Video Modal End -->


@yield('content')
<!-- Blog End -->


<!-- Footer Start -->
@include('frontend.layout.footer')
<!-- Footer End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend/components/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('frontend/components/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/components/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/components/lib/counterup/counterup.min.js')}}"></script>

<!-- Contact Javascript File -->
<script src="{{asset('frontend/components/mail/jqBootstrapValidation.min.js')}}"></script>
<script src="{{asset('frontend/components/mail/contact.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('frontend/components/js/main.js')}}"></script>
</body>
</html>
