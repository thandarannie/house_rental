@extends('template')
@section('content')
<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-lg-2">
                <div class="search-wrap-1 ftco-animate">
                    <form action="{{route('owner.update',$house->id)}}" method="post" class="search-property-1 bg-light mt-5" enctype="multipart/form-data" style="border-radius:1.5em">
                        <center><h1 class="text-dark">Edit Your Post</h1>
                              <hr>
                        </center>
                        @csrf
                        @method('PUT')
                        <div class="row offset-2">
                            <div class="col-lg-6 align-items-end">
                                <div class="form-group">
                                    <!-- <label>House Photo:</label>
                                    <input type="file" name="image" class="form-control-file"> -->
                                    <label>Image:</label>
                                    <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror"><br>
                                    <img src="{{asset($house->image)}}" class="img-fluid w-75">
                                    <input type="hidden" name="oldimg" value="{{$house->image}}">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Title:</label>
                                    <input type="text" name="title" class="form-control w-75" value="{{$house->title}}">
                                </div>
                                <div class="form-group">
                                    <label>Township:</label>
                                    <select name="township" id="" class="form-control w-75">
                                        
                                        <option value="" disabled>Choose Category</option>
                                        @foreach($townships as $row)
                                        <option value="{{$row->id}}"

                                            @if($house->township_id==$row->id)
                                            {{'selected'}}
                                            @endif>
                                            {{$row->name}}
                                        </option>
                                        @endforeach                      </select>
                                </div>
                                <div class="form-group">
                                    <label>Location:</label><br>
                                    st : <input type="text" name="st" class="form-control w-25 d-inline-block" value="{!!$house->street!!}">
                                    house no : <input type="text" name="hno" class="form-control w-25 d-inline-block" value="{!!$house->hno!!}">
                                </div>
                                
                            </div>
                            <div class="col-lg-6">
                            <div class="form-group">
                                    <label>Phone No:</label><br>
                                    <input type="text" name="phone" class="form-control w-75" value="{{$house->phone}}">
                                </div>
                                <div class="form-group">
                                    <label>HouseType:</label>
                                    <select name="type" id="" class="form-control w-75" value="">
                                        <option value="" disabled>Choose Category</option>
                                        @foreach($housetypes as $row)
                                        <option value="{{$row->id}}"

                                            @if($house->type_id==$row->id)
                                            {{'selected'}}
                                            @endif>
                                            {{$row->name}}
                                        </option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>No Bed Room:</label>
                                    <input type="text" name="room" value="{{$house->room}}" class="form-control w-75">
                                </div>
                                <div class="form-group">
                                    <label>Area:</label>
                                    <input type="text" name="area" value="{{$house->area}}" class="form-control w-75">
                                </div>
                                <div class="form-group">
                                    <label>Price(MMK)/Month:</label>
                                    <input type="text" name="price" value="{{$house->price}}" class="form-control w-75">
                                </div>

                                <div class="form-group ">
                                    <label>Description</label><br>
                                    <textarea class="form-control w-75" name="desc">{!!$house->description!!}</textarea>
                                </div>
                            </div>

                        </div>
                        <center>
                            <input type="submit" name="btnsubmit" value="Update" class="btn btn-info text-dark w-25 my-5" style="font-size:1.5em;" >

                            </center> 

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

