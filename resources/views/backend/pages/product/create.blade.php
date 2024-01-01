@extends('backend.layouts.app')
@section('title')
    Product Create
@endsection

@section('contain')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Product Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Product Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
        <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Component</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Product Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Group</label>
                                        <input type="text" class="form-control" name="group" placeholder="Product Group">
                                    </div>
                                    <div class="form-group ">
                                        <label for="exampleInputPassword1">Product Image</label>
                                        <input type="file" class="form-control" name="image" >
                                    </div>
                                    
                                    
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control" name="price" placeholder="Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Product Category</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Product textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <button type="submit" class="btn  btn-primary">Save Product</button>
                                </form>
                            </div>
                        </div>
                        
                        <hr>     
            </div>
       
           
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection