@extends('template')
@section('content')

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            @php
                $user=Auth::user();

            @endphp


            <form method="post" action="{{route('user.update',$user->id)}}" 
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <img src="{{asset($user->image)}}" class="img-fluid rounded-circle w-50">
                <input type="hidden" name="oldprofile" value="{{$user->image}}">

                <div class="form-group">
                    <label>Change Profile:</label>
                    <input type="file" name="profile" class="form-control-file" >
                    
                </div>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{$user->name}}">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    
                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control" 
                    value="{{$user->email}}" readonly="readonly">
                    
                </div>

                <div class="form-group">
                    <input type="submit" name="btnsubmit" class="btn btn-primary" value="Update">
                    <a href="{{route('post.index')}}" class="btn btn-secondary">Cancel</a>
                    
                </div>
                 
            </form>
            
        </div>
        
    </div>
    
</div>

@endsection