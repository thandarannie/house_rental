@extends('backendtemplate')
@section('content') 
<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="title-5 m-b-20">Townships Details</h3>
                            </div>
        </div>
        <div class="table-responsive">
            <table class="table bg-light my-lg-5">
                <thead>
                    <tr>
                        <th>User Id</th>
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
                    @foreach($users as $user)
                    <tr>
                        <td>U-{{$user->id}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->nrc}}</td>
                        <td>{{$user->image}}</td>
                        <td></td>
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection