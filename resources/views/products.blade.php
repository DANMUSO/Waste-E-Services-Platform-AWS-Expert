@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <br>
                <center>
                    <h3>Solid Waste Recycle Engineering</h3>
                </center>
                <br>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Solid Waste Sellers</span>
                                <span class="info-box-number">
                                    100,000
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Solid Waste Bidders</span>
                                <span class="info-box-number">20,000</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i
                                    class="fas fa-shopping-cart"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Solid Waste Products</span>
                                <span class="info-box-number">1,200,050</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Sent SMS</span>
                                <span class="info-box-number">2,000,000</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                    aria-describedby="example1_info">
                    <thead>
                        <tr role="row">
                            <th>Id</th>
                            <th>Sellers</th>
                            <th>Solid Waste Type</th>
                            <th>Photo</th>
                            <th>Quantity</th>
                            <th>Location</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd">
                            <td>1</td>
                            <td>Nema</td>
                            <td>Recyclable Rubbish</td>
                            <td><img style="width:80%; height:150px"
                                    src="https://cdn-japantimes.com/wp-content/uploads/2022/05/np_file_156183.jpeg"
                                    alt="..."></td>
                            <td>45 Tonnes</td>
                            <td>Dandora</td>
                            <td>2022-10-20</td>
                            <td><button type="button" class="btn btn-success" aria-label="Left Align">
                                    Approved
                                </button></td>
                        </tr>
                        <tr class="odd">
                            <td>2</td>
                            <td>Enviromental Advocate</td>
                            <td>Liquid Waste</td>
                            <td>
                                <img style="width:80%; height:150px"
                                    src="https://thoughtfulsystems.com/wp-content/uploads/2019/10/liquidmanagement1.jpg"
                                    alt="...">
                            </td>
                            <td>100 Tonnes</td>
                            <td>Westlands</td>
                            <td>2022-10-20</td>
                            <td><button type="button" class="btn btn-success" aria-label="Left Align">
                                    Approved
                                </button></td>
                        </tr>
                        <tr class="odd">
                            <td>3</td>
                            <td>Water Resourcs Authority</td>
                            <td>Hazardous Waste</td>
                            <td>
                                <img style="width:80%; height:150px"
                                    src="https://axil-is.com/wp-content/uploads/2022/08/Hazardous-Waste-Image-2.jpeg"
                                    alt="...">
                            </td>
                            <td>405 Tonnes</td>
                            <td>Parklands</td>
                            <td>2022-10-20</td>
                            <td><button type="button" class="btn btn-success" aria-label="Left Align">
                                    Approved
                                </button>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td>4</td>
                            <td>KEMRI</td>
                            <td>Organic Waste</td>
                            <td>
                                <img style="width:80%; height:150px"
                                    src="https://images.pond5.com/organic-kitchen-waste-compost-leftover-footage-112120114_iconl.jpeg"
                                    alt="...">
                            </td>
                            <td>405 Tonnes</td>
                            <td>Parklands</td>
                            <td>2022-10-20</td>
                            <td><button type="button" class="btn btn-success" aria-label="Left Align">
                                    Approved
                                </button>
                            </td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr role="row">
                            <th>Id</th>
                            <th>Sellers</th>
                            <th>Solid Waste Type</th>
                            <th>Photo</th>
                            <th>Quantity</th>
                            <th>Location</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection