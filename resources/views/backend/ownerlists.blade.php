@extends('backendtemplate')
@section('content')          
<!-- MAIN CONTENT-->
<div class="main-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
         <div class="row my-lg-2">
           <div class="col-lg-6">
              <h4>Owner(rented)</h4>
             <table class="table bg-light" style="font-size: 12px;border-radius:0.5em;">
              <thead class="thead-dark">
                <th>no.</th>
                <th>owner name</th>
                <th>title</th>
              </thead>
              <tbody>
                <?php
                $no=1;  
                ?>
                @foreach($renthouses as $renthouse)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$renthouse->user->name}}</td>
                <td>{{$renthouse->title}}</td>
              </tr>
                @endforeach
              </tbody>
             </table>
           </div>
           <div class="col-lg-6">
              <h4>Owner(avaliable)</h4>
             <table class="table bg-light" style="font-size: 12px;border-radius:0.5em;">
              <thead class="thead-dark">
                <th>no.</th>
                <th>owner name</th>
                <th>title</th>
              </thead>
              <tbody>
                <?php
                $no=1;  
                ?>
                @foreach($avaliablehouses as $avaliablehouse)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$avaliablehouse->user->name}}</td>
                <td>{{$avaliablehouse->title}}</td>
              </tr>
                @endforeach
              </tbody>
             </table>
           </div>
         </div>
        <div class="table-responsive">
          <h3 class="title-5 m-b-20">All Owner Lists</h3>
          <table class="table bg-light" style="font-size: 12px;border-radius:0.5em;">
            <thead class="thead-dark">
              <tr>
                <th>no.</th>
                <th>owner</th>
                <th>title</th>
                <th>township</th>
                <th>type</th>
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
                <th>{{$no++}}</th>
                <td>{{$house->user->name}}</td>
                <td>{{$house->title}}</td>
                <td>{{$house->township->name}}</td>
                <td>{{$house->type->name}}</td>
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

