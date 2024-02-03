<!DOCTYPE html>
<html lang="en">
  <head>
   @include("Admin.Include.CssForAdd",["Page_name"=>"Register"])
  </head>

  <body class="login">
  <div>
      

      <div class="login_wrapper">

        <div  class="animate form ">
          <section class="login_content">
            <form method="POST" action="{{ route('register') }}">
                @csrf
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control  @error('FullName') is-invalid @enderror" placeholder="FullName" required="" name="FullName" value="{{ old('FullName') }}" required autocomplete="FullName" autofocus/>
                @error('FullName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
              </div>
              <div>
                <input type="text" class="form-control @error('UserName') is-invalid @enderror" placeholder="UserName" required="" name="UserName" value="{{ old('UserName') }}" required autocomplete="UserName" autofocus/>
                @error('UserName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
              </div>
              <div>
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"   name="email" value="{{ old('email') }}" required autocomplete="email"/>
  
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
                <div>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password"  />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div >
                    <div class="">
                        <button type="submit" style="border: none ; background:none">
                           Submit
                        </button>
                    </div>
                </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="{{route('login')}}" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-car"></i></i> Rent Car Admin</h1>
                  <p>©2016 All Rights Reserved. Rent Car Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
            </form>
          </section>
        </div>
  </div>
    
  </body>
</html>