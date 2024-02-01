@extends("Admin.Layout.Master",["Page"=>"List Of Cars","Manage"=>"Manage Cars"])

@section("content")

            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Active</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                  </tr>
                                </thead>
          
          
                                <tbody>
                                @foreach ($cars as $car)
                                <tr>
                                    <td>{{$car->Title}}</td>
                                    <td>{{$car->Price}}</td>
                                    <td>{{($car->Active)?'Yes':'NO'}}</td>
                                    <td><a href="{{route('Admin.Car.edit',[$car->id])}}"><img src="{{asset('Admin/images/edit.png')}}" alt="Edit"></a></td>
                                    <td><a href="{{route('Admin.Car.delete',[$car->id])}}"><img src="{{asset('Admin/images/delete.png')}}" alt="Delete"></a></td>
                                  </tr>
                                @endforeach
                                
                                  
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
     
@endsection
