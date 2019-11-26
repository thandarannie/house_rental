@extends('backendtemplate')
@section('content')          
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="statistic__item statistic__item--green h-100">
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
                                <div class="statistic__item statistic__item--blue h-100">
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
                                <div class="statistic__item statistic__item--orange h-100">
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
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
@endsection
       
