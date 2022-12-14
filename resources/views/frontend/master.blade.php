<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href='{{ url('frontend/img/favicon.ico') }}' rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    @notifyCss

    <style>
        .notify {
            z-index: 1000000000;
            margin-top: 2%;
        }
    </style>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    @include('frontend.partials.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->

    @include('frontend.partials.navbar')

    <!-- Navbar End -->
    <x:notify-messages />

    @yield('content')

    <!-- Footer Start -->
    @include('frontend.partials.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    @notifyJs
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src='{{ url('frontend/lib/easing/easing.min.js') }}"></script>
    <script src='{{ url('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src='{{ url('frontend/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src='{{ url('frontend/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src='{{ url('frontend/js/main.js') }}"></script>
</body>

</html>
