@extends('template')
@section('content')

<!-- <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('{{asset('frontend/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="overlay-2"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
        <h1 class="mb-3 bread">Edit Form</h1>
    </div>
</div>
</div>
</section> -->

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row offset-1">
            <div class="col-lg-12">
                <div class="search-wrap-1 ftco-animate">
                    <form action="{{route('owner.update',$house->id)}}" method="post" class="search-property-1" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6 align-items-end">
                                <div class="form-group">
                                    <label>House Photo:</label>
                                    <input type="file" name="image" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label>Title:</label>
                                    <input type="text" name="title" class="form-control w-50" value="{{$house->title}}">
                                </div>
                                <div class="form-group">
                                    <label>Township:</label>
                                    <select name="township" id="" class="form-control w-50">
                                        @foreach($townships as $row)
                                        <option value="">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Location</label><br>
                                    <textarea class="form-control w-50" name="location" >{!!$house->location!!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Phone No:</label><br>
                                    <input type="text" name="phone" class="form-control w-50" value="{{$house->phone}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>HouseType:</label>
                                    <select name="type" id="" class="form-control w-50" value="">
                                        @foreach($housetypes as $row)
                                        <option value="">{{$row->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>No Bed Room:</label>
                                    <input type="text" name="room" value="{{$house->room}}" class="form-control w-50">
                                </div>
                                <div class="form-group">
                                    <label>Area:</label>
                                    <input type="text" name="area" value="{{$house->area}}" class="form-control w-50">
                                </div>
                                <div class="form-group">
                                    <label>Price:</label>
                                    <input type="text" name="price" value="{{$house->price}}" class="form-control w-50">
                                </div>

                                <div class="form-group">
                                    <label>Description</label><br>
                                    <textarea class="form-control w-50" name="desc">{!!$house->desc!!}</textarea>
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="update" value="Update" class="btn btn-info">
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

