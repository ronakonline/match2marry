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

                        <h4 class="page-title">Users</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?php echo base_url();?>Matrimonial"><button class="btn btn-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New User</button></a>
                            <h4 class="header-title mt-0">Users Details</h4>

                            <div class="table-responsive dash-social">
                                <table id="datatable" class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Country</th>
                                        <th>View</th>
                                    </tr><!--end tr-->
                                    </thead>

                                    <tbody>
                                    <?php
                                    foreach ($my_data as $row){
                                        ?>
                                        <tr>
                                            <td><?php echo $row->name; ?><small class="badge badge-soft-pink ml-1">New</small></td>
                                            <td><?php echo $row->email; ?></td>
                                            <td><?php echo $row->gender; ?></td>
                                            <td>United States</td>
                                            <td>
                                                <a href="<?php echo base_url();?>Admin_Users/profile/<?php echo $row->id; ?>"><button class="btn btn-primary">Profile</button></a>
                                            </td>
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