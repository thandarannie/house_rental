@extends('template')
@section('content')


<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-lg-3">
                <div class="search-wrap-1 ftco-animate">
                    
                    <form action="{{route('rent.store')}}" class="search-property-1 bg-light mt-5" method="post" enctype="multipart/form-data" value="" style="border-radius:1.5em";>
                       <h4 class="text-dark text-center">To Rent</h4>
                        <hr>
                         @csrf
                        
                        <div class="row offset-2">
                            <div class="col-lg-6 align-items-end ">
                                <input type="hidden" name="house" value="{{$house->id}}">
                                <div class="form-group offset-5 w-100">
                                    <label>From Date</label>
                                    <input type="date" name="from" class="form-control @error('from') is-invalid @enderror ">
                                    @error('from')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group offset-5 w-100">
                                    <label>To Date</label>
                                    <input type="date" name="to" class="form-control @error('to') is-invalid @enderror">
                                    @error('to')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group offset-5 w-100">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group offset-5 w-100">
                                    <label>Phone</label>
                                    <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group offset-5 w-100">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control @error('message') is-invalid @enderror"></textarea>
                                    @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                                
                            </div>   
                        </div>
                        <center>
                            <input type="submit" name="btnsubmit" value="Rent" class="btn btn-info text-dark w-25 my-5" style="font-size:1.5em;" >

                            </center> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection