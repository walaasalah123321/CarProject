@extends("Admin.Layout.Master",["Page"=>"List of Messages","Manage"=>"Manage Messages"])

@section("content")

            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Show</th>
                                    <th>Delete</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach ( $messages as $message )
                                <tr style="{{!($message->Read)?'font-weight: bold':''}}">
                                    <td>{{$message->FirstName}} {{$message->LastName}}</td>
                                    <td>{{$message->Email}}</td>
                                    <td><a href="{{route("Admin.Contact.Show",$message->id)}}"><img src="{{asset('Admin/images/edit.png')}}" alt="Edit"></a></td>
                                    <td><a href="{{route("Admin.Contact.delete",$message->id)}}"><img src="{{asset('Admin/images/delete.png')}}" alt="Delete"></a></td>
                                  </tr>
                                @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
     
@endsection
