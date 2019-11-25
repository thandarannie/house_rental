@extends('template')
@section('content')

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="search-wrap-1 ftco-animate">
                    <form action="{{route('owner.store')}}" method="post" class="search-property-1 bg-light" enctype="multipart/form-data">
                        @csrf
                        <div class="row offset-2">
                            <div class="col-lg-6 align-items-end my-5">
                                <div class="form-group">
                                    <label>House Photo:</label>
                                     <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">
                                     @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Title:</label>
                                    <input type="text" name="title" class="form-control w-50 @error('title') is-invalid @enderror" >
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Township:</label>
                                    <select name="township" id="" class="form-control w-50 ">
                                        @foreach($townships as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>

                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Location:</label><br>
                                    st : <input type="text" name="st" class="form-control w-25 d-inline-block @error('st') is-invalid @enderror">
                                    @error('st')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    house.no : <input type="text" name="hno" class="form-control w-25 d-inline-block @error('hno') is-invalid @enderror">
                                    @error('hno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Phone No:</label><br>
                                    <input type="text" name="phone" class="form-control w-50 @error('phone') is-invalid @enderror" >
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 my-5">
                                <div class="form-group">
                                    <label>HouseType:</label>
                                    <select name="type" id="" class="form-control w-50">
                                        @foreach($housetypes as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>No Bed Room:</label>
                                    <input type="text" name="room" value="" class="form-control w-50 @error('room') is-invalid @enderror">
                                    @error('room')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Area:</label>
                                    <input type="text" name="area" value="" class="form-control w-50 @error('area') is-invalid @enderror">
                                    @error('area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Price:</label>
                                    <input type="text" name="price" value="" class="form-control w-50 @error('price') is-invalid @enderror">
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Description</label><br>
                                    <textarea class="form-control w-50 @error('desc') is-invalid @enderror" name="desc"></textarea>
                                    @error('desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <center>
                                    <input type="submit" name="btnsubmit" value="Post Your House" class="btn w-25" style="background-color: #3FC5F0;">

                                </center> 
                            </div>
                        </div>
                        </form>
                    <!-- </table> -->
                </div>
            </div>

        </div>

    </div>
</section>

@endsection

