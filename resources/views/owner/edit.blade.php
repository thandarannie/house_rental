@extends('template')
@section('content')

<section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('frontend/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="overlay-2"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
        <h1 class="mb-3 bread">Form</h1>

      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row offset-1">
            <div class="col-lg-12">
                <div class="search-wrap-1 ftco-animate">
                    <form action="#" class="search-property-1">
                        <div class="row">
                            <div class="col-lg-8 align-items-end">
                                <div class="form-group">
                                    <img src="" class="img-fluid rounded-circle w-25">
                                    <input type="hidden" name="oldprofile" value="">  
                                </div>
                                <div class="form-group">
                                    <label>Change Profile:</label>
                                    <input type="file" name="profile" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label>Title:</label>
                                    <input type="text" name="text" class="form-control w-50" >
                                </div>
                                <div class="form-group">
                                    <label>Location</label><br>
                                    Street:
                                    <input type="text" name="" class="form-control w-25 d-inline-block">
                                    No:
                                    <input type="text" name="" class="form-control w-25 d-inline-block">
                                    Township:
                                    <select name="" id="" class="form-control w-25 d-inline-block">
                                        <option value="">Aung Myay Thar Zan</option>
                                        <option value="">Chan Aye Thar Zan</option>
                                        <option value="">Mahar Aung Myay</option>
                                        <option value="">Chan Mya Thar Si</option>
                                        <option value="">Pyi Gyi Ta Kon</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>HouseType:</label>
                                    <select name="" id="" class="form-control w-50">
                                        <option value="">Condo</option>
                                        <option value="">Apartment</option>
                                        <option value="">Bungalow</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Bed Room:</label>
                                    <input type="text" name="room" value="" class="form-control w-50">
                                </div>
                                <div class="form-group">
                                    <label>Area:</label>
                                    <input type="text" name="area" value="" class="form-control w-50">
                                </div>
                                <div class="form-group">
                                    <label>Price:</label>
                                    <input type="text" name="room" value="" class="form-control w-50">
                                </div>
                                <div class="form-group">
                                    
                                </div>
                            </div>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="ftco-section">

    <div class="row my-5">
        <div class="col-lg-6 offset-md-2">
            
            <img src="" class="img-fluid rounded-circle w-25">
            <input type="hidden" name="oldprofile" value="">
            
                <label>Change Profile:</label>
                <input type="file" name="profile" class="form-control-file">
           
                <label>Title:</label>
                <input type="text" name="text" class="form-control w-50" >

            
                <label>Township:</label>
            <select name="" id="" class="form-control w-50">
                <option value="">Aung Myay Thar Zan</option>
                <option value="">Chan Aye Thar Zan</option>
                <option value="">Mahar Aung Myay</option>
                <option value="">Chan Mya Thar Si</option>
                <option value="">Pyi Gyi Ta Kon</option>
            </select>
            
                <label>HouseType:</label>
            <select name="" id="" class="form-control w-50">
                <option value="">Condo</option>
                <option value="">Apartment</option>
                <option value="">Bungalow</option>
            </select>

        </div>
        <div class="col-lg-6 offset-md-2">
           
                <label>Bed Room:</label>
                <input type="text" name="room" value="" class="form-control w-50">
            
                <label>Area:</label>
                <input type="text" name="area" value="" class="form-control w-50">
            
                <label>Price:</label>
                <input type="text" name="room" value="" class="form-control w-50">
           
                <label>Email:</label>
                <input type="text" name="room" value="" class="form-control w-50">
            
                <label>Location:</label>
                <textarea name="desc" type="text" class="form-control w-50"></textarea>
            
                <label>Description:</label>
                <textarea name="desc" type="text" class="form-control w-50"></textarea>
            
                <input type="submit" name="btnsubmit" class="btn btn-primary w-25 offset-1" value="Save">
       
    </div>
</div>
</section> -->
@endsection

