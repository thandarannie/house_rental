@extends('template')
@section('content')


<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row offset-1">
            <div class="col-md-12">
                <div class="search-wrap-1 ftco-animate">
                    <center><h1 class="mb-3 bread text-danger">To Rent</h1></center>
                    <form action="{{route('rent.store')}}" class="search-property-1" method="post" enctype="multipart/form-data" value="" style="background: linear-gradient(to top, #ffffcc 0%, #990000 100%);

                }">
                         @csrf
                        
                        <div class="row offset-2">
                            <div class="col-lg-6 align-items-end">
                                <input type="hidden" name="house" value="{{$house->id}}">
                                <div class="form-group offset-5">
                                    <label>FROM DATE</label>
                                    <input type="date" name="from" class="form-control @error('from') is-invalid @enderror">
                                    @error('from')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group offset-5">
                                    <label>TO DATE</label>
                                    <input type="date" name="to" class="form-control @error('to') is-invalid @enderror">
                                    @error('to')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group offset-5">
                                    <label>ADDRESS</label>
                                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group offset-5">
                                    <label>PHONE</label>
                                    <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group offset-5">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control @error('message') is-invalid @enderror"></textarea>
                                    @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <center><div class="form-group offset-5">
                                    <input type="submit" name="" value="Send Your Rent" class="btn btn-danger w-50 ">
                                </div></center>
                                
                            </div>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection