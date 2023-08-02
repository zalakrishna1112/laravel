@extends('website.layout.main')

@section('midsection')
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Signup Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Signup</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container col-md-12 ">
        <div class="col-md-6 offset-md-3">
					
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif



    @if (Session::has('SUCESSS'))
						<div class="alert alert-success">
							
								<span>{{ Session::get('SUCESSS') }}</span>
							
						</div>
					@elseif(Session::has('fail'))
                    <div class="alert alert-danger">
							
								<span>{{Session::get('fail') }}</sapn>
							
						</div>
                        @endif
        <form action="{{url('/insertsignup')}}" method="post" enctype="multipart/form-data">
        @csrf
                
            <div class="form-group">
                <label>FIRST NAME</label>
                <input type="text" name="name"  value="{{old('name')}}" class="form-control" placeholder="enter your name">
            </div>
            @error('name')
											<div class="alert alert-danger">{{ $message }}</div>
										@enderror
            <div class="form-group">
                <label>EMAIL</LABEL>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="enter your name">
            </div>

            @error('email')
					<div class="alert alert-danger">{{ $message }}</div>
			@enderror
            <div class="form-group">
        
            <label>USER NAME</label>
                <input type="unm" name="unm" value="{{old('unm')}}" class="form-control" placeholder="enter your name">
            </div>
            
            
            <div class="form-group">
                <LABEL>PASSWORD</LABEL>
                <input type="pass" name="pass"  class="form-control" placeholder="enter your name">
            </div>

            @error('pass')
					<div class="alert alert-danger">{{ $message }}</div>
			@enderror
            <div class="form-control">
                <LABEL>gen:</LABEL>
             <input type="radio" name="gen"  value="male">male
             <input type="radio" name="gen" value="female">female
            </div>
            @error('gen')
					<div class="alert alert-danger">{{ $message }}</div>
			@enderror
            
            <div class="form-group">
            <LABEL>lag</LABEL>

                <div class="form-control">
             <input type="checkbox"  name="lag[]" id="hindi" value="gujarti">
             <label>Gujarti</label>
             <input type="checkbox"  name="lag[]" id="english" value="english">
             <label>english</label>
             <input type="checkbox"  name="lag[]" value="hindi">
             <label>hindi</label>

</div>
            </div>
            @error('lag[]')
					<div class="alert alert-danger">{{ $message }}</div>
			@enderror
            <div class="form-group">
                <label>file:</label>
                <input type="file"  name="file"class="form-control">
            </div>
            @error('file')
					<div class="alert alert-danger">{{ $message }}</div>
			@enderror
           
            
            
            <div class="form-group">
            <select name="cid" class="form-control">
                
                <option>SELECT YOUR COUNTRY</OPTION>
                @if(!empty($countrie))
                @foreach($countrie as $c)
                <option value="{{$c->id}}">{{$c->cname}}</OPTION>
                @endforeach
                @endif
            </div>
            @error('cid')
					<div class="alert alert-danger">{{ $message }}</div>
			@enderror
    
            
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary">
            </div>

        </form>
    </div>
        <!-- Contact End -->
@endsection