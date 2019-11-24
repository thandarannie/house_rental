@extends('backendtemplate')
@section('content')          
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="row">
                            <h3 class="title-5 m-b-20">Edit Townships</h3>
                        </div>
                        <div class="row my-5 bg-light">
                            <!-- DATA TABLE -->
                            <form method="post" action="{{route('townshipdetails.update',$township->id)}}" enctype="multipart/form-data">
                                @csrf 
                                @method('PUT')
                              <div class="form-group">
                                  <label for="name">Township Name :</label>
                                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" required autocomplete="name" value="{{$township->name}}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                              </div>
                              <div class="form-group">
                                <input type="submit" name="save" value="Save" class="btn btn-info w-25">
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection
       
