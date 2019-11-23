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
                                       <tr>
                                        <td></td>
                                        <td>
                                             <a href="#" class="btn btn-success" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </a>
                                        </td>
                                            <td></td>
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
       
