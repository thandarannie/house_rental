@extends('template')
@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-md-8 offset-md-2">
            <form class="offset-md-3">
            <img src="" class="img-fluid rounded-circle w-25">
            <input type="hidden" name="oldprofile" value="">
            <div class="form-group">
                <label>Change Profile:</label>
                <input type="file" name="profile" class="form-control-file">
            </div>

            <div class="form-group">
                <label>Title:</label>
                <input type="text" name="text" class="form-control w-50" >
            </div>
            
            <div class="form-group">
                <label>Township:</label>
            <select name="" id="" class="form-control w-50">
                <option value="">Aung Myay Thar Zan</option>
                <option value="">Chan Aye Thar Zan</option>
                <option value="">Mahar Aung Myay</option>
                <option value="">Chan Mya Thar Si</option>
                <option value="">Pyi Gyi Ta Kon</option>
            </select>
            </div>

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
                <label>Email:</label>
                <input type="text" name="room" value="" class="form-control w-50">
            </div>

             <div class="form-group">
                <label>Location:</label>
                <textarea name="desc" type="text" class="form-control w-50"></textarea>
            </div>

            <div class="form-group">
                <label>Description:</label>
                <textarea name="desc" type="text" class="form-control w-50"></textarea>
            </div>
            

            <div class="form-group">
                <input type="submit" name="btnsubmit" class="btn btn-primary w-25 offset-1" value="Save">
                
            </div>
        </form>
    </div>
</div>
</div>
@endsection

