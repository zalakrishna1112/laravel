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
               
            </div>
        </div>
      
       
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Login</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				  @if(session('failed'))
					<span class="alert alert-danger">{{session('failed')}}</span>
				  @endif
				  <div class="container mt-3">
					  
					  <form action="{{url('/adminloginauth')}}" method="post">
						@csrf
						<div class="mb-3 mt-3">
						  <label for="text">USERNAME:</label>
						  <input type="text" class="form-control" id="anm" placeholder="Enter Your Username" name="anm">
						</div>
						<div class="mb-3">
						  <label for="pwd">Password:</label>
						  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="apass">
						</div>
						<div class="form-check mb-3">
						  <label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="remember"> Remember me
						  </label>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					  </form>
					</div>
				  
				  
              
                 <!-- /. ROW  -->           
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
       
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{url('admin/assets/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{url('admin/assets/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{url('admin/assets/js/jquery.metisMenu.js')}}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{url('admin/assets/js/custom.js')}}"></script>
    
   
</body>
</html>
