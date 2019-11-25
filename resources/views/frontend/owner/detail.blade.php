@extends('template')
  @section('content')



<section class="ftco-section ftco-property-details">
  <div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="property-details">
                <div class="img rounded" style="background-image: url('{{asset($house->image)}}');">
                    <!-- <img src="{{asset($house->image)}}" class="img-fluid"> -->
                </div>
                @hasanyrole('owner|admin')
                @if(Auth::check() && Auth::id()==$house->user_id)
                <div class="float-left d-inline-block">
                    <a href="{{route('owner.edit',$house->id)}}" class="btn d-inline-block" style="width: 75px;background-color: #3FC5F0;">Edit</a>

                    <form method="post" action="{{route('owner.destroy',$house->id)}}" onsubmit="return confirm('Are your sure want to delete?')" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="delete" value="DELETE" class="btn  d-inline-block" style="width: 75px;background-color: #3FC5F0;"> 
                    
                    </form>
                    </div>
                @endif
                @endhasanyrole

                @guest
                <a href="{{route('login')}}">
                     <input type="submit" name="btnsubmit" value="Rent" class="btn btn-danger float-right" style="width: 75px;background-color: #3FC5F0;">
                </a>
                   
                @else
                   <a href="{{route('rent.show',$house->id)}}">
                        <input type="submit" name="btnsubmit" value="Rent" class="btn  float-right" style="width: 75px;background-color: #3FC5F0;">
                   </a>
                   
                @endguest
                <br>
                <br>

                
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 pills">
            <div class="bd-example bd-example-tabs">
                <div class="d-flex">
                  <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">

<!--                     <li class="nav-item">
                      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                  </li> -->
                  <li class="nav-item">
                    <h1 class="mb-3 bread" style="color:#3FC5F0">Properties Details</h1>
                      
                  </li>
                  
              </ul>
          </div>

          <div class="tab-content" id="pills-tabContent">


            <div class="tab-pane fade show active" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
              <p><div class="text">
                <ul>
                    <li style="color:#3FC5F0">Title : {{($house->title)}}</li>
                    <li style="color:#3FC5F0">Price : {{($house->price)}}</li>
                    <li style="color:#3FC5F0">Area : {{($house->area)}}</li>
                    <li style="color:#3FC5F0">Bed Room : {{($house->room)}}</li>
                    <li style="color:#3FC5F0">Township : {{$house->township->name}}</li>
                    <li style="color:#3FC5F0">House Type : {{$house->type->name}}</li>
                    <li style="color:#3FC5F0">Description : {{$house->description}}</li>
                  </div></p>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>


@endsection



<!-- loader -->
