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
                        <h4 class="page-title">Visitors</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mt-0">Visitor Details</h4>

                            <div class="table-responsive dash-social">
                                <table id="datatable" class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>IP</th>
                                        <th>Country Name</th>
                                    </tr><!--end tr-->
                                    </thead>

                                    <tbody>
                                    <?php
                                    if(count($my_data)>0){
                                        foreach ($my_data as $row){
                                            ?>

                                        <tr>
                                            <td><?php echo $row->ip; ?></td>
                                            <td><?php echo $row->location; ?></td>
<!--                                            <td>-->
<!--                                                <a href="--><?php //echo base_url();?><!--Admin_Users/profile/--><?php //echo $row->id; ?><!--"><button class="btn btn-primary">Profile</button></a>-->
<!--                                            </td>-->
                                        </tr><!--end tr-->
                                    <?php }
                                    }else{
                                      echo "<tr><td>No visitors</td></tr>";
                                    } ?>

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