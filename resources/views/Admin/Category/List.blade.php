@extends("Admin.Layout.Master",["Page"=>"All Categories","Manage"=>"Manage Categories"])

@section("content")

            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           @foreach ($Categories as $Category)
                                            <tr>
                                                <td>{{$Category->Category_Name}}</td>
                                                <td><a href="{{route('Admin.Category.edit',[$Category->id])}}"><img src="{{asset('Admin/images/edit.png')}}" alt="Edit"></a></td>
                                                <td><a href="{{route('Admin.Category.delete',[$Category->id])}}"><img src="{{asset('Admin/images/delete.png')}}" alt="Delete"></a></td>
                                            </tr>
                                           @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
     
@endsection
