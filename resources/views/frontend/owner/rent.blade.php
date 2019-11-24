@extends('template')
@section('content')
<section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('{{asset('frontend/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
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

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row offset-1">
            <div class="col-md-12">
                <div class="search-wrap-1 ftco-animate">
                    <form action="{{route('rent.store')}}" class="search-property-1" method="post" enctype="multipart/form-data" value="">
                         @csrf
                        
                        <div class="row offset-3">
                            <div class="col-lg-6 align-items-end">
                                <input type="hidden" name="house" value="{{$house->id}}">
                                <div class="form-group">
                                    <label>FROM DATE</label>
                                    <input type="date" name="from" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>TO DATE</label>
                                    <input type="date" name="to" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>ADDRESS</label>
                                    <input type="text" name="address" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>PHONE</label>
                                    <input type="number" name="phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="" value="Send" class="btn btn-primary w-25 ">
                                </div>
                                
                            </div>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection