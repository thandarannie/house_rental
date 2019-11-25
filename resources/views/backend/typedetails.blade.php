@extends('backendtemplate')
@section('content')          
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="row">
                            <!-- DATA TABLE -->
                            <div class="col-lg-6">
                                <h3 class="title-5 m-b-20">House Type Details</h3>
                            </div>
                            <div class="col-lg-6">
                            <a href="{{route('typedetails.create')}}" class="btn btn-info float-lg-right">
                            Add New</a>
                            </div>
                            <div class="table-responsive">
                            <table class="table bg-light">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Action</th>
                                        <th>Type Name</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach($types as $type)
                                       <tr>
                                        <td>{{$type->id}}</td>
                                        <td>{{$type->name}}</td>
                                        <td>
                                             <a href="{{route('typedetails.edit',$type->id)}}" class=
                                                "btn btn-success" title="Edit">

                                                <i class="zmdi zmdi-edit"></i>
                                            </a>


                                            <a href="{{url('/delete_type/'.$type->id)}}" class="btn btn-danger" title="Delete">
                                                 @csrf
                                                 @method('DELETE')
                                                <i class="zmdi zmdi-delete"></i>
                                            </a>

                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                                <!-- END DATA TABLE -->
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection
       
