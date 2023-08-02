<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{url('website/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('website/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('website/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('website/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('website/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('website/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <?php
        function active($currect_page){
            $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
            $url = end($url_array);  
            if($currect_page == $url){
                echo 'active'; //class name in css 
            } 
        }
    ?>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Pizza Hut</h1>
                    <!-- <img src="{{url('website/img/logo.png')}}" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{url('/index')}}" class="nav-item nav-link <?php active('index')?>"  >Home</a>
                        <a href="{{url('/about')}}" class="nav-item nav-link <?php active('about')?>" >About</a>
                        <a href="{{url('/service')}}" class="nav-item nav-link <?php active('service')?>" >Service</a>
                        <a href="{{url('/menu')}}" class="nav-item nav-link <?php active('menu')?>" >Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{url('/booking')}}" class="dropdown-item <?php active('booking')?>" >Booking</a>
                                <a href="{{url('/team')}}" class="dropdown-item <?php active('team')?>" >Our Team</a>
                                <a href="{{url('/testimonial')}}" class="dropdown-item <?php active('testimonial')?>" >Testimonial</a>
                            </div>
                        </div>
						<?php // get / use  session ?>
						@if(session()->get('userid'))
						<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{session('name')}}</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{url('/profile')}}" class="dropdown-item <?php active('profile')?>" >Profile</a>
                            </div>
                        </div>
						@endif
                        <a href="{{url('/contact')}}" class="nav-item nav-link <?php active('contact')?>" >Contact</a>
                    </div>
					@if(session()->get('userid'))
						<a href="{{url('/logout')}}" class="btn btn-primary py-2 px-4">Logout</a>
					@else
						<a href="{{url('/login')}}" class="btn btn-primary py-2 px-4">Login</a>
					@endif
				</div>
            </nav>