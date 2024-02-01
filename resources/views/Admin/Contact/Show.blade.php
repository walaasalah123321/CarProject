
  @extends("Admin.Layout.Master",["Page"=>" Message Details","Manage"=>"Manage Messages"])

@section("content")
<div class="x_content">
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <h2>Full Name: {{$message->FirstName}}  {{$message->LastName}}</h2>
        <br>
        <h2>Email:  {{$message->Email}}</h2>
         <br>
        <h2>Message Content:</h2>
        <p> {{$message->Message}}</p>
      </div>
    </div>
    <div class="item form-group">
        <div class=" col-sm-12 ">
            <a href="{{route('Admin.Contact.List')}}"><button class="btn btn-primary" type="button">All Message</button></a>
        </div>
    </div>
  </div>
</div>
@endsection
