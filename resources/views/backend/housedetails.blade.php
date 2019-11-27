@extends('backendtemplate')
@section('content')          
<!-- MAIN CONTENT-->
<div class="main-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 my-5 ">
        <h3 class="title-5 m-b-20">House Details</h3>
        <div class="table-responsive">
          <table class="table bg-light" style="font-size: 12px;border-radius:0.5em;">
            <thead class="thead-dark">
              <tr>
                <th>no.</th>
                <th>owner</th>
                <th>township</th>
                <th>type</th>
                <th>title</th>
                <th>price</th>
                <th>room</th>
                <th>st</th>
                <th>house_no</th>
                <th>phone</th>
               <th>status</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                  $no=1;
               ?>
              @foreach($houses as $house)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$house->user->name}}</td>
                <td>{{$house->township->name}}</td>
                <td>{{$house->type->name}}</td>
                <td>{{$house->title}}</td>
                <td>{{$house->price}}</td>
                <td>{{$house->room}}</td>
                <td>{{$house->street}}</td>
                <td>{{$house->hno}}</td>
                <td>{{$house->phone}}</td>
                <?php 
                    if ($house->status==1) {
                      $action="rent";
                  ?>
                  <td class="text-danger">{{$action}}</td>
                  <?php
                    }else {
                      $action="avaliable";
                      ?>
                      <td class="text-success">{{$action}}</td>
                      <?php } ?>
                <td>
                  <div class="table-data-feature">
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

