@extends('template')
@section('content')
<section class="ftco-section ftco-no-pb">
    <div class="container">
        <form action="{{route('owner.store')}}" method="post" novalidate="novalidate" class="my-3 " enctype="multipart/form-data" >
            <div class="row offset-1">

                <div class="col-lg-5 bg-light">
                    @csrf
                    <div class="form-group has-success mt-4">
                        <label for="cc-name" class="control-label mb-1" >Title:</label>
                        <input id="cc-name" name="title" type="text" class="form-control cc-name valid w-100 @error('title') is-invalid @enderror " data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div>

                    <div class="form-group has-success">
                        <label for="cc-number" class="control-label mb-1">Township:</label>
                        <select name="township" id="cc-number"  type="township" class="form-control cc-number identified visa w-100" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                            @foreach($townships as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>

                            @endforeach
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </select>
                    </div>


                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1" >Street:</label>
                        <input id="cc-name" name="st" type="text" class="form-control cc-name valid w-100 @error('st') is-invalid @enderror " data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                        @error('st')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div>

                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1" >House No:</label>
                        <input id="cc-name" name="hno" type="text" class="form-control cc-name valid w-100 @error('hno') is-invalid @enderror " data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                        @error('hno')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div>

                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1" >Phone No:</label>
                        <input id="cc-name" name="phone" type="text" class="form-control cc-name valid w-100 @error('phone') is-invalid @enderror " data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div>

                    <div class="form-group has-success ">
                        <label for="cc-payment" class="control-label mb-1" >House Photo:</label>
                        <input id="cc-pament" name="image" type="file" class="form-control-file @error('image') is-invalid @enderror " aria-required="true" aria-invalid="false" value="100.00">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6 bg-light">
                    <div class="form-group has-success mt-4">
                        <label for="cc-number" class="control-label mb-1">House Type:</label>
                        <select name="type" id="cc-number"  type="tel" class="form-control cc-number identified visa w-100 @error('type') is-invalid @enderror" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                            @foreach($housetypes as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>

                            @endforeach
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </select>
                    </div>


                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1" >No Bed Room:</label>
                        <input id="cc-name" name="room" type="text" class="form-control cc-name valid w-100 @error('room') is-invalid @enderror" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                        @error('room')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div>

                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1" >House Area:</label>
                        <input id="cc-name" name="area" type="text" class="form-control cc-name valid w-100 @error('area') is-invalid @enderror" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                        @error('area')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div>

                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1" >Price(MMK)/Month:</label>
                        <input id="cc-name" name="price" type="text" class="form-control cc-name valid w-100 @error('price') is-invalid @enderror" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div>

                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1" >Description:</label>
                        <textarea id="cc-name" name="desc" type="text" class="form-control cc-name valid w-100 @error('desc') is-invalid @enderror" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                        </textarea>
                        @error('desc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span></div>

                    <center><div class="form-group has-success">
                    <input type="submit" name="btnsubmit" value="Post" class="btn btn-info text-dark w-50" style="font-size:1em;" ></div>
                </center>
                        
                    </div> 
                </div>



            </form>
        </div>

    </section>


    @endsection