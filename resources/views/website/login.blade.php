@extends('website.layout.main')

@section('midsection')
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Login Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Login Us</h5>
                    <h1 class="mb-5">Login For Any Order</h1>
                </div>
                <div class="row g-4">
                   
                    
                    <div class="col-md-6 offset-md-3">
						@if(session('failed'))
							<span class="alert alert-danger">{{session('failed')}}</span>
						@endif
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="{{url('/loginauth')}}" method="post">
							@csrf
                                <div class="row g-3">
                                    
                                   <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="unm" class="form-control" id="unm" placeholder="Your username">
                                            <label for="text">Your Username</label>
                                        </div>
                                    </div>
									
									<div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" name="pass" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Password</label>
                                        </div>
                                    </div>
                                   
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Login</button>
										<a href="{{url('/signup')}}">If you not Register then Click Here</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
@endsection