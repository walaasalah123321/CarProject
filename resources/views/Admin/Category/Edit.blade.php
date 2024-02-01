@extends("Admin.Layout.Master",["Page"=>"Edit Category","Manage"=>"Manage Categories"])

@section("content")
                    <div class="x_content">
                        <br>
                        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="{{route('Admin.Category.update',[$Category->id])}}" method="POST">

                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Category <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="first-name" required="required" class="form-control " name="Category_Name" value="{{$Category->Category_Name}}">
                                </div>
                               
                            </div>
                            <div class="item form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-md-6 col-sm-6 ">
                                    @error("Category_Name")
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            
                           
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="{{route('Admin.Category.List')}}"><button class="btn btn-primary" type="button">Cancel</button></a>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
               
@endsection
