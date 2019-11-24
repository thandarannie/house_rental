@extends('backendtemplate')
@section('content')          
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="row">
                            <!-- DATA TABLE -->
                            <center>
                                 <h3 class="title-5 m-b-20">Rent Order Lists</h3>
                            </center>
                            <div class="table-responsive">
                            <table class="table bg-light">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>title</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>phone</th>
                                        <th>request date</th>
                                        <th>from</th>
                                        <th>to</th>
                                        <th>message</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach($houses as $house)
                                       <tr>
                                             <td>
                                                <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Confirm">
                                                        <i class="zmdi zmdi-check"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                </div>
                                            </td>
                                            <td>{{$house->house->title}}</td>
                                            <td>{{$house->user->name}}</td>
                                            <td>{{$house->user->email}}</td>
                                            <td>{{$house->phone}}</td>
                                            <td>
                                                {{$house->created_at}}
                                            </td>
                                            <td>
                                               {{$house->from}}
                                            </td>
                                            <td>{{$house->to}}</td>
                                            
                                            <td>{{$house->message}}</td>
                                            <td>
                                                <span class="status--process">Processed</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                            </div>
                                <!-- END DATA TABLE -->
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection
       
