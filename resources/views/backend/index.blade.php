@extends('backendtemplate')
@section('content')          
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="statistic__item statistic__item--green h-80">
                    <h2 class="number">{{ $total }}</h2>
                    <a href="{{url('/rentlists')}}">
                        <span class="desc text-light">Rent Lists</span>
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="statistic__item statistic__item--blue h-80">
                    <h2 class="number">{{ $totalusers }}</h2>
                    <a href="{{url('/userposts')}}">
                        <span class="desc text-light">User Lists</span>
                        <div class="icon">
                         <i class="zmdi zmdi-account-o"></i>
                     </div>
                 </a>
             </div>
         </div>
         <div class="col-md-6 col-lg-4">
            <div class="statistic__item statistic__item--orange h-80">
                <h2 class="number">{{ $totalhouse }}</h2>
                <a href="{{url('/housedetails')}}">
                    <span class="desc text-light">House Lists</span>
                    <div class="icon">
                     <i class="zmdi zmdi-balance"></i>
                 </div>
             </a>
         </div>
     </div>
 </div>
 <div class="row">
    <div class="col-sm-6 col-lg-4">
        <div class="overview-item overview-item--c1">
            <a href="{{route('housedetails.index')}}">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                         <i class="zmdi zmdi-home zmdi-hc-fw"></i> 
                     </div>
                     <div class="text">
                        <h2>{{$total_rent_houses}}</h2>
                        <span>Rented House</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="col-sm-6 col-lg-4">
    <div class="overview-item overview-item--c3">
        <a href="{{route('housedetails.index')}}">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-home zmdi-hc-fw"></i> 
                    </div>
                    <div class="text">
                        <h2>{{$total_ava_houses}}</h2>
                        <span>Avaliable Houses</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="col-sm-6 col-lg-4">
    <div class="overview-item overview-item--c1">
       <a href="/townshipdetails">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                 <i class="zmdi zmdi-home zmdi-hc-fw"></i> 
             </div>
             <div class="text">
                <h2>{{$total_township}}</h2>
                <span>Townships</span>
            </div>
        </div>
    </div>
</a>
</div>
</div>

</div>
</div>
</div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
@endsection

