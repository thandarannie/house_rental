@extends('backendtemplate')
@section('content')          
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <!-- DATA TABLE -->
                <div class="table-responsive">
                    <div class="row">
                        <div class="col-lg-9">
                            <h3 class="title-5 m-b-20">House Type Details</h3>
                        </div>
                         <div class="col-lg-3">
                          <a href="{{route('typedetails.create')}}" class="btn btn-info float-lg-right">
                            Add New</a>
                        </div>
                    </div>
                <table class="table bg-light w-100" style="font-size: 12px;border-radius:0.5em;">
                        <thead class="thead-dark">
                            <tr>
                                <th>No.</th>
                                <th>Action</th>
                                <th>Type Name</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no=1; 
                           ?>
                            @foreach($types as $type)
                            <tr>
                                <td>{{$no++}}</td>
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

