@extends("Admin.Layout.Master",["Page"=>"Add Testimonial","Manage"=>"Manage Testimonial"])

@section("content")

                    <div class="x_content">
                        <br>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{route('Admin.Testimonial.update',[$Testimonial->id])}}" method="POST" enctype="multipart/form-data">
                           @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name" class="form-control " name="Name" value="{{$Testimonial->Name}}">
                                </div>
                               
                            </div>
                            <div class="item form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-md-6 col-sm-6 ">
                                    @error("Name")
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Position <span class="required" >*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="position"  class="form-control " name="Position" value="{{$Testimonial->Position}}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-md-6 col-sm-6 ">
                                    @error("Position")
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea id="content" name="Content"  class="form-control">{{$Testimonial->Content}}</textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-md-6 col-sm-6 ">
                                    @error("Content")
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Published</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="flat" name="Publish" @checked($Testimonial->Publish) >
                                    </label>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" id="image" name="image"  class="form-control" name="image">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-md-6 col-sm-6 ">
                                    @error("image")
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-md-6 col-sm-6 ">
                                    <img style="width: 200px; height:100px" src="{{asset('Admin/Image/Testimonial/'.$Testimonial->image)}}" alt="">

                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="{{route('Admin.Testimonial.List')}}"><button class="btn btn-primary" type="button">Cancel</button></a>
                                    <button type="submit" class="btn btn-success">Updata</button>
                                </div>
                            </div>

                        </form>
                    </div>
              
@endsection
