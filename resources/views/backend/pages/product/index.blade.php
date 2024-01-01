@extends('backend.layouts.app')
@section('title')
    Product
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
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5>Product Table</h5>
                            <a class="btn btn-outline-primary" href="{{ route('product.create') }}"> Add a New Product</a>

                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>SI_NO</th>
                                            <th> Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>120 $</td>
                                            <td>image</td>
                                            <td class="d-flex justify-content-start">
                                                <a href="#"
                                                    class="btn btn-outline-info mx-1">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="#"
                                                    class="btn btn-outline-success">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form id="delete-form" action="#"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-danger mx-1" type="submit"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>120 $</td>
                                            <td>image</td>
                                            <td class="d-flex justify-content-start">
                                                <a href="#"
                                                    class="btn btn-outline-info mx-1">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="#"
                                                    class="btn btn-outline-success">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form id="delete-form" action="#"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-danger mx-1" type="submit"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>120 $</td>
                                            <td>image</td>
                                            <td class="d-flex justify-content-start">
                                                <a href="#"
                                                    class="btn btn-outline-info mx-1">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="#"
                                                    class="btn btn-outline-success">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form id="delete-form" action="#"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-danger mx-1" type="submit"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
@endsection
