@extends('admin.layout.main')
@section('midsection')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Manage Contact</h2>
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
                                    <th>Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
									<th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
									<td>{{$d->id}}</td>
                                    <td>{{$d->name}}</td>
                                    <td>{{$d->email}}</td>
                                    <td>{{$d->message}}</td>
									<td><a href="{{url('/manage_contact/'.$d->id)}}" class="btn btn-danger">Delete</a></td>
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
