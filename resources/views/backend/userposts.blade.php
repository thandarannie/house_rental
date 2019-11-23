@extends('backendtemplate')
@section('content') 
<div class="row">
    <div class="col-lg-12">
        <h2 class="title-1 m-b-25">User Posts</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>created at</th>
                        <th>name</th>
                        <th>email</th>
                        <th>nrc</th>
                        <th>image</th>
                        <th>role</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2018-09-29 05:57</td>
                        <td>Mya Mya</td>
                        <td>mya@gmail.com</td>
                        <td>9/mnt(n)098765</td>
                        <td>aa.jpg</td>
                        <td>user</td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                    <i class="zmdi zmdi-view-dashboard"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                     <tr>
                        <td>2018-09-29 05:57</td>
                        <td>Mya Mya</td>
                        <td>mya@gmail.com</td>
                        <td>9/mnt(n)098765</td>
                        <td>aa.jpg</td>
                        <td>user</td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                    <i class="zmdi zmdi-view-dashboard"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                     <tr>
                        <td>2018-09-29 05:57</td>
                        <td>Mya Mya</td>
                        <td>mya@gmail.com</td>
                        <td>9/mnt(n)098765</td>
                        <td>aa.jpg</td>
                        <td>user</td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                    <i class="zmdi zmdi-view-dashboard"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection