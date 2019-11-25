@extends('backendtemplate')
@section('content')          
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="row">
                            <!-- DATA TABLE -->
                            <div class="col-lg-6">
                                <h3 class="title-5 m-b-20">Townships Details</h3>
                            </div>
                            <div class="col-lg-6">
                            <a href="{{route('townshipdetails.create')}}" class="btn btn-info float-lg-right">
                            Add New</a>
                            </div>
                            <div class="table-responsive">
                            <table class="table bg-light">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Action</th>
                                        <th>Township Name</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach($township as $town)
                                       <tr>
                                        <td>{{$town->id}}</td>
                                        <td>{{$town->name}}</td>
                                        <td>
                                             <a href="{{route('townshipdetails.edit',$town->id)}}" class="btn btn-success" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>

                                            <a href="{{url('/delete_township/'.$town->id)}}" class="btn btn-danger" title="Delete">
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
       
