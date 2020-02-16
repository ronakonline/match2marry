<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/topnav'); ?>
<?php $this->load->view('admin/sidenav'); ?>



<!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                
                                <h4 class="page-title">Employees</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <a href="<?php echo base_url();?>Admin_Employees/emp_form"><button class="btn btn-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Employee</button></a>
                                    <h4 class="header-title mt-0">Employees Details</h4>

                                    <div class="table-responsive dash-social">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>User Name</th>
                                                <th>User type</th>

                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <?php
                                                foreach ($my_data as $row){
                                            ?>
                                            <tr>
                                                <td><?php echo $row->Name; ?><small class="badge badge-soft-pink ml-1">New</small></td>
                                                <td><?php echo $row->email; ?></td>
                                                <td><?php echo $row->username; ?></td>
                                                <td><?php echo $row->user_type; ?></td>
                                            </tr><!--end tr-->
                                                    <?php } ?>


                                            </tbody>
                                        </table>                    
                                    </div>                                         
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                               
                    </div><!--end row--> 

                </div><!-- container -->

                <?php $this->load->view('admin/footer'); ?>
                <!--end footer-->
            </div>
            <!-- end page content -->
<?php $this->load->view('admin/scripts'); ?>