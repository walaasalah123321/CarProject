@extends("Admin.Layout.Master",["Page"=>"All User","Manage"=>"Manage Users"])


@section("content")

            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Published</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                  </tr>
                                </thead>
                                <tbody>
                                 @foreach ($testimonials as $testimonial)
                                 <tr>
                                    <td>{{$testimonial->Name}}</td>
                                    <td>{{$testimonial->Position}}</td>
                                    <td>{{($testimonial->Publish)?'YES':'No'}}</td>
                                    <td><a href="{{route('Admin.Testimonial.edit',[$testimonial->id])}}"> <img src="{{asset('Admin/images/edit.png')}}" alt="Edit"></a></td>
                                    <td><a href="{{route('Admin.Testimonial.delete',[$testimonial->id])}}"><img src="{{asset('Admin/images/delete.png')}}" alt="Delete"></a></td>
                                  </tr>
                                 
                                 @endforeach
                                  
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
      
@endsection

