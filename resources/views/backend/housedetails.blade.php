@extends('backendtemplate')
@section('content')          
<!-- MAIN CONTENT-->
<div class="main-content">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
        <h3 class="title-5 m-b-20">House Details</h3>
        <div class="table-responsive">
          <table class="table bg-light">
            <thead>
              <tr>
                <th>owner</th>
                <th>township</th>
                <th>type</th>
                <th>title</th>
                <th>area</th>
                <th>price</th>
                <th>room</th>
                <th>st</th>
                <th>house_no</th>
                <th>image</th>
                <th>phone</th>
                <th>status</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($houses as $house)


              <tr>
                <td>{{$house->user->name}}</td>
                <td>{{$house->township->name}}</td>
                <td>{{$house->type->name}}</td>
                <td>{{$house->title}}</td>
                <td>{{$house->area}}</td>
                <td>{{$house->price}}</td>
                <td>{{$house->room}}</td>
                <td>{{$house->street}}</td>
                <td>{{$house->hno}}</td>
                <td>{{$house->phone}}</td>
                <td>{{$house->status}}</td>
                <td>
                  <div class="table-data-feature">
                   <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class="zmdi zmdi-edit"></i>
                  </button>
                  <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                    <i class="zmdi zmdi-view-dashboard"></i>
                  </button>
                  <a href="{{url('/delete_housedetails/'.$house->id)}}" class="btn btn-danger" title="Delete">
                   @csrf
                   @method('DELETE')
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
</div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
@endsection
       
