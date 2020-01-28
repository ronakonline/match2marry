<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            include '../header.php';
         ?>        
    </head>

    <body>

        <!-- Top Bar Start -->
        <?php  
            include '../topnav.php';
        ?>
        <!-- Top Bar End -->

        <div class="page-wrapper">
            <!-- Left Sidenav -->
            <?php  
                include '../sidenav.php';
            ?>
            <!-- end left-sidenav-->

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Vendors</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-4">Vendors Growth</h4>
                                    <div class="chart-demo">
                                        <div id="apex_line1" class="apex-charts"></div>
                                    </div>                                        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-8 align-self-center">
                                                <h5 class="">Returning vendors</h5>
                                                <p class="text-muted mb-0">Last Month : 150 <i class="mdi mdi-menu-up text-success font-16"></i></p>
                                            </div><!--end col-->
                                            <div class="col-4">
                                                <span class="peity-bar" data-peity='{ "fill": ["#e0e7fd", "#4d79f6"]}' data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                            </div><!--end col-->
                                        </div>  <!--end row-->                                                      
                                    </div><!--end icon-contain-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->   
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-8 align-self-center">
                                                <h5 class="">New vendors</h5>
                                                <p class="text-muted mb-0">Last Month : 10 <i class="mdi mdi-menu-down text-danger font-16"></i></p>
                                            </div><!--end col-->
                                            <div class="col-4">
                                                <span class="peity-line" data-width="100%" data-peity='{ "fill": ["#c3f0ff"],"stroke": ["#4ac7ec"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                            </div><!--end col-->
                                        </div>  <!--end row-->                                                      
                                    </div><!--end icon-contain-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->  
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-8 align-self-center">
                                                <h5 class="">Bounce Rate</h5>
                                                <p class="text-muted mb-0">Last Month : 30% <i class="mdi mdi-menu-up text-success font-16"></i></p>
                                            </div><!--end col-->
                                            <div class="col-4 text-right">
                                                <span class="peity-donut" data-peity='{ "fill": ["#4d79f6", "#e0e7fd"], "innerRadius": 23, "radius": 32 }' data-width="60" data-height="60">226,134</span>
                                            </div><!--end col-->
                                        </div>  <!--end row-->                                                      
                                    </div><!--end icon-contain-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->                                         
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Customer</button>
                                    <h4 class="header-title mt-0">vendors Details</h4> 
                                    <div class="table-responsive dash-social">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Customer Name</th>
                                                <th>Email</th>
                                                <th>Phone No</th>                                                    
                                                <th>Country</th>
                                                <th>Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td><img src="../assets/images/users/user-10.jpg" alt="" class="thumb-sm rounded-circle mr-2">Donald Gardner<small class="badge badge-soft-pink ml-1">New</small></td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>Tokyo, JAP</td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="../assets/images/users/user-9.jpg" alt="" class="thumb-sm rounded-circle mr-2">Matt Rosales</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>San Francisco USA</td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="../assets/images/users/user-8.jpg" alt="" class="thumb-sm rounded-circle mr-2">Michael Hill<small class="badge badge-soft-blue ml-1">New</small></td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>Sydeny AUS</td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="../assets/images/users/user-7.jpg" alt="" class="thumb-sm rounded-circle mr-2">Nancy Flanary</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>Berlin GER</td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="../assets/images/users/user-6.jpg" alt="" class="thumb-sm rounded-circle mr-2">Dorothy Key</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>New York USA</td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="../assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle mr-2">Joseph Cross</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>Tokyo JAP</td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                                                                            
                                            </tbody>
                                        </table>                    
                                    </div>                                         
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                               
                    </div><!--end row--> 

                </div><!-- container -->

                <?php include '../footer.php' ?>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/metisMenu.min.js"></script>
        <script src="../assets/js/waves.min.js"></script>
        <script src="../assets/js/jquery.slimscroll.min.js"></script>

        <script src="../assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
        <!-- Required datatable js -->
        <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="../assets/plugins/peity-chart/jquery.peity.min.js"></script>

        <script src="../assets/pages/jquery.ana_customers.inity.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.js"></script>

    </body>
</html>