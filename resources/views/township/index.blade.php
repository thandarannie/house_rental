@extends('template')
@section('content')

<div class="hero-wrap" style="background-image: url('{{asset('frontend/images/bg2.jpeg')}}');" data-stellar-background-ratio="0.5">
  <!-- <div class="overlay"></div>
  <div class="overlay-2"></div> -->
  <div class="container">
    <div class="row no-gutters slider-text justify-content-center align-items-center">
      <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
        
    </div>
</div>
</div>
<div class="mouse">
    <a href="#" class="mouse-icon">
        <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
    </a>
</div>
</div>
<section class="ftco-section goto-here">
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">For Sale</span>
            <h2 class="mb-2">Properties for Sale in Mandalay Region</h2>
        </div>
    </div>

    <div class="row">
        @foreach($houses as $house)
        <div class="col-md-4">
            <div class="property-wrap ftco-animate">
                <div class="img d-flex align-items-center justify-content-center" style="background-image: url('{{asset($house->image)}}');"> 
                    
                    <!-- <img src="{{asset($house->image)}}" class="img-fluid">
                    <div class="img rounded" style="background-image: url('{{asset($house->image)}}');"> -->

                    <a href="{{route('owner.show',$house->id)}}" class="icon d-flex align-items-center justify-content-center btn-custom">
                        <span class="ion-ios-link"></span> 
                    </a>
                    <div class="list-agent d-flex align-items-center">
                        <a href="#" class="agent-info d-flex align-items-center">
                            <div class="img-2 rounded-circle" style="background-image: url(frontend/images/person_1.jpg);"></div>
                            
                        </a>
                        
                    </div>
                                    </div>
                                    <div class="text">
                    <p class="price mb-3">
                        <span class="orig-price">{{($house->price)}}<small></small></span></p>
                    <h3 class="mb-0"><a href="properties-single.html">{{$house->title}}</a></h3>
                    <span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i>
                        {{$house->township->name}}
                    </span>
                    <ul class="property_list">
                        <li><span class="flaticon-bed"></span>{{($house->room)}}</li>
                        
                        <li><span class="flaticon-floor-plan"></span>{{($house->area)}}</li>
                    </ul>
                                    </div>
                                </div>
                            </div>

        @endforeach
                    
                        </div>

                    </div>
                </div>
            </section>



            <!-- loader -->

            @endsection