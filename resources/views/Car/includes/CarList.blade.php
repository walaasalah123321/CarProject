<div class="site-section bg-light">
    <div class="container">
        <div class="row">
        <div class="col-lg-7">
            <h2 class="section-heading"><strong>Car Listings</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
        </div>
        </div>
        

        <div class="row">
        @foreach ($cars as $car)
        <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
            <div class="listing-img h-100 mr-4">
                <img src="{{asset('Admin/image/Car/'.$car->Image)}}" alt="Image" class="img-fluid">
            </div>
            <div class="listing-contents h-100">
                <h3>{{$car->Title}}</h3>
                <div class="rent-price">
                <strong>${{$car->Price}}</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">{{$car->Luggages}}</span>
                </div>
                <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">{{$car->Doors}}</span>
                </div>
                <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">{{$car->Passengers}}</span>
                </div>
                </div>
                <div>
                <p>{{substr($car->Content,0,100)}} <a href="">...</a></p>
                <p><a href="{{route('Car.Single',[$car->id])}}" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
            </div>

            </div>
        </div>

        @endforeach
       

        
       
        </div>
        @if (Request()->routeIs('Car.Listing'))
        {{$cars->links()}}
      @endif
    </div>
 

</div>