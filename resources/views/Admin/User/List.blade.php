@extends("Admin.Layout.Master",["Page"=>"All User","Manage"=>"Manage Users"])


@section("content")

            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Registration Date</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Active</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            
                                          @foreach ($users as $user)
                                          <tr>
                                            <td>{{date("d M Y",strtotime($user->created_at))}}</td>
                                            <td>{{$user->FullName}}</td>

                                            <td>{{$user->UserName}}</td>
                                           
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->Active?'Yes':"no"}}</td>
                                            <td><a href="{{route('Admin.User.edit',[$user->id])}}"><img src="{{asset('Admin/images/edit.png')}}" alt="Edit"></a></td>
                                        </tr>
                                       
                                          @endforeach
                                
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
      
@endsection

