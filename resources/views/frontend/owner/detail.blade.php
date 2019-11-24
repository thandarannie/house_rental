@extends('template')
  @section('content')

<section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('{{ asset('frontend/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
  <!-- <div class="overlay"></div>
  <div class="overlay-2"></div> -->
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
        <h1 class="mb-3 bread">Properties Details</h1>
        
    </div>
</div>
</div>
</section>

<section class="ftco-section ftco-property-details">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="property-details">
                <div class="img rounded" style="background-image: url('{{asset($house->image)}}');">
                    <!-- <img src="{{asset($house->image)}}" class="img-fluid"> -->
                </div>
                @hasanyrole('owner|admin')
                <div class="float-left d-inline-block">
                    <a href="{{route('owner.edit',$house->id)}}" class="btn btn-warning d-inline-block">Edit</a>

                    <form method="post" action="{{route('owner.destroy',$house->id)}}" onsubmit="return confirm('Are your sure want to delete?')" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                    <input type="submit" name="delete" value="Delete" class="btn btn-danger d-inline-block">
                    </form>
                    </div>
                @endhasanyrole

                @guest
                <a href="{{route('login')}}">
                     <input type="submit" name="btnsubmit" value="Rent" class="btn btn-primary float-right">
                </a>
                   
                @else
                   <a href="{{route('rent.show',$house->id)}}">
                        <input type="submit" name="btnsubmit" value="Rent" class="btn btn-primary float-right">
                   </a>
                   
                @endguest
                <br>
                <br>

                <div class="text">
                    <h2>{{($house->title)}}</h2>
                    <span class="subheading">{{($house->location)}}</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 pills">
            <div class="bd-example bd-example-tabs">
                <div class="d-flex">
                  <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">

<!--                     <li class="nav-item">
                      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                  </li> -->
                  <li class="nav-item">
                      <a class="nav-link active" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                  </li>
              </ul>
          </div>

          <div class="tab-content" id="pills-tabContent">
<!--             <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="features">
                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Lot Area: 1,250 SQ FT</li>
                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Bed Rooms: 4</li>
                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Bath Rooms: 4</li>
                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Luggage</li>
                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Garage: 2</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="features">
                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Floor Area: 1,300 SQ FT</li>
                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Year Build:: 2019</li>
                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Water</li>
                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Stories: 2</li>
                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Roofing: New</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="features">
                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Floor Area: 1,300 SQ FT</li>
                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Year Build:: 2019</li>
                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Water</li>
                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Stories: 2</li>
                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Roofing: New</li>
                        </ul>
                    </div>
                </div>
            </div> -->

            <div class="tab-pane fade show active" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
          </div>

          <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
              <div class="row">
                <div class="col-md-7">
                    <h3 class="head">23 Reviews</h3>
                    <div class="review d-flex">
                        <div class="user-img" style="background-image: url(frontend/images/person_1.jpg)"></div>
                        <div class="desc">
                            <h4>
                                <span class="text-left">Jacob Webb</span>
                                <span class="text-right">17 October 2019</span>
                            </h4>
                            <p class="star">
                                <span>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                </span>
                                <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                            </p>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                        </div>
                    </div>
                    <div class="review d-flex">
                        <div class="user-img" style="background-image: url(frontend/images/person_2.jpg)"></div>
                        <div class="desc">
                            <h4>
                                <span class="text-left">Jacob Webb</span>
                                <span class="text-right">17 October 2019</span>
                            </h4>
                            <p class="star">
                                <span>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                </span>
                                <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                            </p>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                        </div>
                    </div>
                    <div class="review d-flex">
                        <div class="user-img" style="background-image: url(frontend/images/person_3.jpg)"></div>
                        <div class="desc">
                            <h4>
                                <span class="text-left">Jacob Webb</span>
                                <span class="text-right">17 October 2019</span>
                            </h4>
                            <p class="star">
                                <span>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                </span>
                                <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                            </p>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="rating-wrap">
                        <h3 class="head">Give a Review</h3>
                        <div class="wrap">
                            <p class="star">
                                <span>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    (98%)
                                </span>
                                <span>20 Reviews</span>
                            </p>
                            <p class="star">
                                <span>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    (85%)
                                </span>
                                <span>10 Reviews</span>
                            </p>
                            <p class="star">
                                <span>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    (70%)
                                </span>
                                <span>5 Reviews</span>
                            </p>
                            <p class="star">
                                <span>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    (10%)
                                </span>
                                <span>0 Reviews</span>
                            </p>
                            <p class="star">
                                <span>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    (0%)
                                </span>
                                <span>0 Reviews</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>


@endsection



<!-- loader -->
