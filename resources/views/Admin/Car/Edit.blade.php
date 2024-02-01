@extends("Admin.Layout.Master",["Page"=>"Edit Car","Manage"=>"Manage Cars"])


@section("content")
                   
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{route('Admin.Car.update',[$car->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="title" required="required" class="form-control " name="Title" value="{{$car->Title}}">
            @error("Title")
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <textarea id="content" name="Content" required="required" class="form-control">{{$car->Content}}</textarea>
            @error("Content")
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
     
    </div>
    <div class="item form-group">
        <label for="luggage" class="col-form-label col-md-3 col-sm-3 label-align">Luggage <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="luggage" class="form-control" type="number" name="Luggages" required="required" value="{{$car->Luggages}}">
            @error("Luggages")
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label for="doors" class="col-form-label col-md-3 col-sm-3 label-align">Doors <span class="required" >*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="doors" class="form-control" type="number" name="Doors" required="required" value="{{$car->Doors}}">
            @error("Doors")
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label for="passengers" class="col-form-label col-md-3 col-sm-3 label-align">Passengers <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="passengers" class="form-control" type="number" name="Passengers" required="required" value="{{$car->Passengers}}">
            @error("Passengers")
            <div class="text-danger">{{$message}}</div>
        @enderror
        </div>
    </div>
    <div class="item form-group">
        <label for="price" class="col-form-label col-md-3 col-sm-3 label-align">Price <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="price" class="form-control" type="number" name="Price" required="required" value="{{$car->Price}}">
            @error("Price")
            <div class="text-danger">{{$message}}</div>
        @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
        <div class="checkbox">
            <label>
                <input type="checkbox" class="flat" name="Active" @checked($car->Active)>
            </label>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required" >*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="file" id="image" name="Image" class="form-control">
            <img src="{{asset('Admin/image/Car/'.$car->Image)}}" alt="" style="width: 300px;">

            @error("Image")
            <div class="text-danger">{{$message}}</div>
        @enderror
        </div>
    </div>

    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Category <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select class="form-control"  id="" name="Cat_id">
                <option value="">Select Category</option>
                @foreach ( $cats as $cat)
               
                <option value="{{$cat->id}}" @selected($car->Cat_id==$cat->id)>{{$cat->Category_Name}}</option>
                @endforeach
                
            </select>
            @error("Cat_id")
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
           
            <a href="{{route('Admin.Car.List')}}"> <button class="btn btn-primary" type="button">Cancel</button></a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>

</form>
@endsection
