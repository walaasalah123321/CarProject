@extends("Admin.Layout.Master",["Page"=>"Add User","Manage"=>"Manage Users"])
@section("content")

                    <div class="x_content">
                        <br>
                        <form method="POST" action="{{ route('Admin.User.store') }}">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Full Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" class="form-control  @error('FullName') is-invalid @enderror"  required="" name="FullName" value="{{ old('FullName') }}" required autocomplete="FullName" autofocus/>
                                    @error('FullName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror     
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="user-name">Username <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" class="form-control @error('UserName') is-invalid @enderror"  required="" name="UserName" value="{{ old('UserName') }}" required autocomplete="UserName" autofocus/>
                                    @error('UserName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Email <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"    name="email" value="{{ old('email') }}" required autocomplete="email"/>
  
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
                                <div class="checkbox">
                                    <label>
                                        <div class="icheckbox_flat-green" style="position: relative;"><input name="Active" type="checkbox" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"   />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button type="submit" class="btn btn-success">Add</button>
                                </div>
                            </div>

                        </form>
                    </div>
              
@endsection
