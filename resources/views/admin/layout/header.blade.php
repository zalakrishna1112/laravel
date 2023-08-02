<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Two Page</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{url('admin/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{url('admin/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{url('admin/assets/css/custom.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;TWO PAGE</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Welcome....admin{{session()->get('anm')}}</a></li>
                        <li><a href="{{url('/adminlogout')}}">logout</a></li>
                        
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="{{url('admin/assets/img/find_user.png')}}" class="img-responsive" />
                     
                    </li>


                    <li>
                        <a href="{{url('/dashboard')}}"><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-list-alt "></i>Catgory<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('/add_category')}}">Add Category</a>
                            </li>
                            <li>
                                <a href="{{url('/manage_category')}}">Manage Category</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="{{url('/manage_contact')}}"><i class="fa address-book "></i>Manage Contact</a>
                    </li>
                    <li>
                        <a href="{{url('/manage_user')}}"><i class="fa fa-user "></i>Manage user </a>
                    </li>

                    <li>
                        <a href=""><i class="fa fa-user "></i>Employee<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('/add_employee')}}">Add Category</a>
                            </li>
                            <li>
                                <a href="{{url('/manage_employee')}}">Manage Category</a>
                            </li>
                            
                        </ul>
                    </li>

                   


                    
                                                     </ul>

            </div>

        </nav>
