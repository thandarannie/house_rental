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
                    <a href="{{route('owner.edit',$house->id)}}" class="btn d-inline-block" style="width:150px;background-color: #3FC5F0;font-size: 1.5em;">Edit</a>

                    <form method="post" action="{{route('owner.destroy',$house->id)}}" onsubmit="return confirm('Are your sure want to delete?')" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="delete" value="DELETE" class="btn  d-inline-block" style="width: 150px;background-color: #3FC5F0;font-size: 1.5em;"> 
                    
                    </form>
                    </div>
                @endif
                @endhasanyrole



                @hasanyrole('owner|admin')

                @else

                @guest
                <center>
                  <a href="{{route('login')}}">
                     <input type="submit" name="btnsubmit" value="Rent" class="btn btn-info w-25" style="font-size: 1.5em">
                </a>
                </center>
                @else
                <center>
                  <a href="{{route('rent.show',$house->id)}}">
                        <input type="submit" name="btnsubmit" value="Rent" class="btn btn-info w-25" style="font-size: 1.5em">
                   </a>
                </center>
                @endguest

                @endhasanyrole


                
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
                    <h1 class="mb-3 bread text-dark">Properties Details</h1>
                      
                  </li>
                  
              </ul>
          </div>

          <div class="tab-content" id="pills-tabContent">


            <div class="tab-pane fade show active" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
              <p><div class="text">
                {{$house->created_at->toFormattedDateString()}} by
            <a>{{$house->user->name}}</a>
            <ul class="text-dark features" style="font-size:1.5em;" >
                        <li class="check"><span class="ion-ios-checkmark-circle"></span>Title : {{($house->title)}}</li>

                        <li class="check"><span class="ion-ios-checkmark-circle"></span>Price : {{($house->price)}} MMK</li>

                        <li class="check"><span class="ion-ios-checkmark-circle"></span>Area : {{($house->area)}}</li>

                        <li class="check"><span class="ion-ios-checkmark-circle"></span>Bed Room : {{($house->room)}}</li>

                        <li class="check"><span class="ion-ios-checkmark-circle"></span>Township : {{$house->township->name}}</li>

                        <li class="check"><span class="ion-ios-checkmark-circle"></span>House Type : {{$house->type->name}}</li>

                        <li class="check"><span class="ion-ios-checkmark-circle"></span>Description : {{$house->description}}</li>
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
