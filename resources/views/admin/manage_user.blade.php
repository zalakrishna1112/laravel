@extends('admin.layout.main')
@section('midsection')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Manage User</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
             
          
                <div class="row">
                    <div class="col-md-12">
                        @if(session('success'))
							<span class="alert alert-success">{{session('success')}}</span>
						@endif	
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Profile</th>
									<th>id</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Gender</th>
									<th>Lang</th>
									<th>Country</th>
									<th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
							@foreach($data as $d)
                                <tr>
                                    <td><img src="{{url('upload/customer/'.$d->file)}}" width="50px"></td>
                                    <td>{{$d->id}}</td>
									<td>{{$d->name}}</td>
                                    <td>{{$d->unm}}</td>
                                    <td>{{$d->gen}}</td>
									<td>{{$d->lag}}</td>
									<td>{{$d->cname}}</td>
									<td><a href="{{url('/manage_user/'.$d->id)}}" class="btn btn-danger">Delete</a></td>
                                </tr>
                            @endforeach   
                            </tbody>
                        </table>

                    </div>
               
                </div>
                <!-- /. ROW  -->
               

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
