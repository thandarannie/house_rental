@extends('backendtemplate')
@section('content')          
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10 my-5 offset-lg-1">
            <!-- DATA TABLE -->
              <h3 class="title-5 m-b-20">Rent History</h3>
               @if(session()->has('status'))
                <script type="text/javascript">
                  alert('{{session()->get('status')}}');
                </script>
               @endif
               <div class="table-responsive">
                <table class="table bg-light" style="font-size: 12px;border-radius:0.5em;">
                    <thead class="thead-dark">
                        <tr>
                          <th>No.</th>
                           <th>Name</th>
                            <th>Title</th>
                             <th>Owner Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Request date</th>
                            <th>From</th>
                            <th>To</th>
                             <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                        @foreach($renthistorys as $renthistory)
                        <tr>
                        <td>{{$no++}}</td>
                          <td>{{$renthistory->user->name}}</td>
                       <td>{{$renthistory->house->title}}</td>
                        <td>{{$renthistory->house->user->name}}</td>
                       <td>{{$renthistory->user->email}}</td>
                       <td>{{$renthistory->phone}}</td>
                       <td>
                        {{$renthistory->created_at}}
                    </td>
                    <td>
                     {{$renthistory->from}}
                 </td>
                 <td>{{$renthistory->to}}</td>
                  <td>
                            <div class="table-data-feature">
                                <a href="{{url('/delete_rent/'.$renthistory->id)}}" class="btn btn-danger" title="Delete">
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
<!-- END DATA TABLE -->
</div>
</div>
</div>
</div>
</div>
<!-- END MAIN CONTENT-->
@endsection

