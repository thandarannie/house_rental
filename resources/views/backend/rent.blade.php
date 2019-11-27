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
               @if(session()->has('status'))
                <script type="text/javascript">
                  alert('{{session()->get('status')}}');
                </script>
               @endif
               <div class="table-responsive">
                <table class="table bg-light ">
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rents as $rent)
                        <tr>
                           <td>
                            <div class="table-data-feature">
                                <a href="{{url('/email/'.$rent->user->email . '/' . $rent->house->id . '/' . $rent->id)}}" class="btn btn-success" title="Confirm">
                                   @csrf
                                  <i class="zmdi zmdi-check"></i>
                               </a>&nbsp;&nbsp;

                               <a href="{{url('/cancelemail/'.$rent->user->email. '/' . $rent->id)}}" class="btn btn-success" title="Cancel">
                                   @csrf
                                  <i class="fas fa-window-close"></i>
                               </a>&nbsp;&nbsp;

                               


                                <a href="{{url('/delete_rent/'.$rent->id)}}" class="btn btn-danger" title="Delete">
                                   @csrf
                                   <i class="zmdi zmdi-delete"></i>
                               </a>
                           </div>
                       </td>
                       <td>{{$rent->house->title}}</td>
                       <td>{{$rent->user->name}}</td>
                       <td>{{$rent->user->email}}</td>
                       <td>{{$rent->phone}}</td>
                       <td>
                        {{$rent->created_at}}
                    </td>
                    <td>
                     {{$rent->from}}
                 </td>
                 <td>{{$rent->to}}</td>
                 
                 <td>{{$rent->message}}</td>
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

