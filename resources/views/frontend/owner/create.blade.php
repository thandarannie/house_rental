@extends('template')
@section('content')
<div class="hero-wrap" style="background-image: url('frontend/images/h2.jpeg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="overlay-2"></div>
  <div class="container">
    <div class="row no-gutters slider-text justify-content-center align-items-center">
        <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
            <div class="text text-center w-100">
                <h1 class="mb-4">House Rental <br>Mandalay</h1>
            </div>
        </div>
    </div>
</div>
<div class="mouse">
    <a href="#" class="mouse-icon">
        <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
    </a>
</div>
</div>
<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row offset-1">
            <div class="col-md-12">
                <div class="search-wrap-1 ftco-animate">
                    <form action="{{route('owner.store')}}" class="search-property-1" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 align-items-end">
                                <div class="form-group">
                                    <label>House Photo:</label>
                                    <input type="file" name="image" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label>Title:</label>
                                    <input type="text" name="title" class="form-control w-50">
                                </div>
                                <div class="form-group">
                                    <label>Township:</label>
                                    <select name="township" class="form-control w-50">
                                        @foreach($townships as $row)
                                        <option value="">{{$row->name}}</option>
                                        @endforeach  
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Location</label><br>
                                    Street:
                                    <input type="text" name="street" class="form-control d-inline-block w-25">
                                    No:
                                    <input type="number" name="no" class="form-control d-inline-block w-25">
                                </div>
                            </div>
                            <div class="col-lg-6 align-items-end">
                                <div class="form-group">
                                    <label>House Type:</label>
                                    <select name="housetype" class="form-control w-50">
                                        @foreach($types as $row)
                                        <option value="">{{$row->name}}</option>
                                        @endforeach  
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Phone:</label>
                                    <input type="text" name="phone" class="form-control w-50">
                                </div>
                                <div class="form-group">
                                    <label>No of Bed Room:</label>
                                    <input type="number" name="room" class="form-control w-50">
                                </div>
                                <div class="form-group">
                                    <label>Area:</label>
                                    <input type="text" name="area" class="form-control w-50">
                                </div>
                                <div class="form-group">
                                    <label>Price:</label>
                                    <input type="text" name="price" class="form-control w-50">
                                </div>
                                <div class="form-group">
                                    <label>Desc:</label>
                                    <input type="text" name="desc" class="form-control w-50">
                                </div>
                                
                            </div>   

                                <input type="submit" name="" value="Save" class="btn btn-warning form-control w-25">
                        </div> 

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

