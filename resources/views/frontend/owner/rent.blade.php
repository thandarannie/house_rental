@extends('template')
@section('content')

<div class="container-fluid"  style="margin-top: 200px; margin-bottom: 20px; ">
    <div class="row offset-3">
        <div class="col-lg-8">
            <form action="{{route('rent.store')}}" method="post" enctype="multipart/form-data" class="bg-light">
                 @csrf
            
                <div class="card-header text-center">
                    <h4><b>To Rent</b></h4>
                </div><br>
                <div class="card-body card-block">
                    <input type="hidden" name="house" value="{{$house->id}}">
                    <div class="form-group">
                        <label for="from">From Date</label>
                        <input type="date"  name="from" class="form-control @error('message') is-invalid @enderror">
                        @error('from')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="to" class=" form-control-label">To Date</label>
                        <input type="date"  name="to" class="form-control @error('to') is-invalid @enderror">
                        @error('to')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address" class=" form-control-label">Address</label>
                        <input type="text" name="address"  class="form-control @error('address') is-invalid @enderror">
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="phone" class=" form-control-label">Phone</label>
                        <input type="text" name="phone"  class="form-control @error('phone') is-invalid @enderror">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message" class=" form-control-label">Message</label>
                        <textarea name="message"  class="form-control @error('message') is-invalid @enderror"></textarea>
                        @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                        
                    
                    <div class="form-group"> 
                        <center><input type="submit"  class="btn btn-info w-25 my-5" value="Rent" style="font-size:1.5em;" ></center>
                    </div>
                </div>
           
        </form>
        </div>
    </div>
</div>



@endsection