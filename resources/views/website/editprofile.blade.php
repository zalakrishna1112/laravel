@extends('website.layout.main')

@section('midsection')
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Edit Profile</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Edit Profile</li>
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
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Edit Profile</h5>
                    <h1 class="mb-5">Edit user and manage profile</h1>
                </div>
                <div class="row g-4">
                   
                    
                    <div class="col-md-6 offset-md-3">
						
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="{{url('/updateprofile/'.$data->id)}}" method="post" enctype="multipart/form-data">
							@csrf
                                <div class="row g-3">
                                    
									<div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="name" class="form-control" value="{{$data->name}}" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    
									<div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="email" name="unm" class="form-control" value="{{$data->unm}}"id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
									
									
									
                                    <div class="col-12">
                                        <div>
										<label for="subject">Gender</label>
										
										<br>
                                            Male:<input type="radio" name="gen" value="Male" <?php
											$gen=$data->gen;
											if($gen=="Male")
											{
												echo "checked";
											}
											?>>
											Female:<input type="radio" name="gen" value="Female" <?php
											$gen=$data->gen;
											if($gen=="Female")
											{
												echo "checked";
											}
											?>>
                                            
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div>
										<label for="subject">Launguages</label>
										<br>
                                            Hindi:<input type="checkbox" name="lag[]" value="Hindi" <?php
											$lag=$data->lag;
											$lag_arr=explode(",",$lag);
											if(in_array("Hindi",$lag_arr))
											{
												echo "checked";
											}
											?>>
											English:<input type="checkbox" name="lag[]" value="English" <?php
											$lag=$data->lag;
											$lag_arr=explode(",",$lag);
											if(in_array("English",$lag_arr))
											{
												echo "checked";
											}
											?>>
											Gujarati:<input type="checkbox" name="lag[]" value="Gujarati" <?php
											$lag=$data->lag;
											$lag_arr=explode(",",$lag);
											if(in_array("Gujarati",$lag_arr))
											{
												echo "checked";
											}
											?>>
                                            
                                        </div>
                                    </div>
									
									<div class="col-md-12">
                                        <div class="form-floating">
                                            <select name="cid" class="form-control" id="email" >
                                            <option>Select Countrie</option>
											@if(!empty($countrie))											
												@foreach($countrie as $c)
													@if($c->id==$data->cid)
														<option value="{{$c->id}}" selected>{{$c->cname}}</option>
													@else
														<option value="{{$c->id}}">{{$c->cname}}</option>	
													@endif
												@endforeach
											@endif
											</select>
                                        </div>
                                    </div>
									<div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="file" name="file" class="form-control" id="email" placeholder="Your file">
											<img width="50px" src="{{url('upload/customer/'.$data->file)}}" alt="">
                                            <label for="email">Your file</label>
                                        </div>
                                    </div>
                                   
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Save</button>
										<a href="{{url('/profile')}}">Back</a>
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