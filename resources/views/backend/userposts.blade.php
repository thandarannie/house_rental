@extends('backendtemplate')
@section('content') 
<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="title-5 m-b-20">Users Details</h3>
                            </div>
        </div>
        <div class="table-responsive">
            <table class="table bg-light my-lg-5">
                <thead class="thead-dark" style="font-size: 12px;border-radius:0.5em;">
                    <tr>
                        <th>User Id</th>
                        <th>created at</th>
                        <th>name</th>
                        <th>email</th>
                        <th>nrc</th>
                       <!--  <th>role</th> -->
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
                        <td>
                            <div class="table-data-feature">
                                <a href="{{url('/delete_userpost/'.$user->id)}}" class="btn btn-danger" title="Delete">
                                   @csrf
                                   <i class="zmdi zmdi-delete"></i>
                               </a>
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