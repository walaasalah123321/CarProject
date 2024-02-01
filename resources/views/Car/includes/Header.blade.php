<header class="site-navbar site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center position-relative">

        <div class="col-3">
          <div class="site-logo">
            <a href="index.html"><strong>CarRental</strong></a>
          </div>
        </div>

        <div class="col-9  text-right">
          
          <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

          <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
            <ul class="site-menu main-menu js-clone-nav ml-auto ">
              <li class="{{Request()->RouteIs('Car.Home')?'active':''}}"><a href="{{route('Car.Home')}}" class="nav-link">Home</a></li>
              <li class="{{Request()->RouteIs('Car.Listing')?'active':''}}" ><a href="{{route("Car.Listing")}}" class="nav-link">Listing</a></li>
              <li  class="{{Request()->RouteIs('Car.Testimonial')?'active':''}}" ><a href="{{route('Car.Testimonial')}}" class="nav-link">Testimonials</a></li>
              <li  class="{{Request()->RouteIs('Car.Blog')?'active':''}}"><a href="{{route('Car.Blog')}}" class="nav-link">Blog</a></li>
              <li  class="{{Request()->RouteIs('Car.About')?'active':''}}"><a href="{{route('Car.About')}}" class="nav-link">About</a></li>
              <li  class="{{Request()->RouteIs('Car.Contact')?'active':''}}"><a href="{{route('Car.Contact')}}" class="nav-link">Contact</a></li>
            </ul>
          </nav>
        </div>

        
      </div>
    </div>

  </header>
