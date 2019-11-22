@extends('template')
@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-md-8 offset-md-2 my-3">


            <div class="form-group">
                <label>Township:</label>
                <select name="" id="" class="form-control">
                    <option value="">Aung Myay Thar Zan</option>
                    <option value="">Chan Aye Thar Zan</option>
                    <option value="">Mahar Aung Myay</option>
                    <option value="">Chan Mya Thar Si</option>
                    <option value="">Pyi Gyi Ta Kon</option>
                </select>
            </div>

            <div class="form-group">
                <label>HouseType:</label>
                <select name="" id="" class="form-control">
                    <option value="">Condo</option>
                    <option value="">Apartment</option>
                    <option value="">Bungalow</option>
                </select>
            </div>

            <div class="form-group">
                <label>Month:</label>
                <input type="text" name="room" class="" value="">
            </div>

            <div class="form-group">
                <label>PhoneNo:</label>
                <input type="text" name="area" class="" value="">
                
            </div>

            <div class="form-group">
                <label>Status:</label>
                <textarea name="desc" type="text"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" name="btnsubmit" class="btn btn-primary" value="Send">
                
            </div>
        </form>
    </div>
</div>
</div>
@endsection

