@extends('website.layout.main')

@section('midsection')
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Profile</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


    


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Profile</h5>
                    <h1 class="mb-5">Edit Profile</h1>
					<br><br>
					@if(session('success'))
						<span class="alert alert-success">{{session('success')}}</span>
					@endif	
                </div>
                <div class="row g-4">
                    <div class="offset-lg-4 col-lg-4 offset-md-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{url('upload/customer/'.$data->file)}}" alt="">
                            </div>
                            <h5 class="mb-0">{{$data->name}}</h5>
                            <small>{{$data->unm}}</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="{{url('profile/'.$data->id)}}"><i class="fa fa-edit"></i></a>
                            </div>
                        </div>
                    </div>
                   
                  
                </div>
            </div>
        </div>
        <!-- Team End -->
@endsection     
