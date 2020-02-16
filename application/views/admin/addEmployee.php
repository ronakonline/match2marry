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
                        <div class="float-right">

                        </div>
                        <h4 class="page-title">Add Employee</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php
                                       // echo validation_errors();
                                    ?>
                                    <form action="./add" method="post">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 col-form-label text-left">Full Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="<?php echo set_value('name')?>" id="name" name="name">
                                            <?php echo form_error('name') ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-form-label text-left">Email</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="email" value="<?php echo set_value('email')?>" id="email" name="email">
                                            <?php echo form_error('email') ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="username" class="col-sm-3 col-form-label text-left">User Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="<?php echo set_value('username')?>" id="username" name="username">
                                            <?php echo form_error('username'); ?>
                                        </div>
                                    </div>

<!--                                    <div class="form-group row">-->
<!--                                        <label for="usertype" class="col-sm-3 col-form-label text-left">User Type</label>-->
<!--                                        <div class="col-sm-9">-->
<!--                                            <input class="form-control" type="text" value="" id="usertype" name="usertype">-->
<!--                                        </div>-->
<!--                                    </div>-->

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-left">User Type</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="usertype">
                                                    <?php foreach ($my_data as $row){
                                                        echo '<option value='.$row->id.'>'.$row->user.'</option>' ;
                                                    }
                                                    ?>

                                                </select>
                                                <?php echo form_error('usertype'); ?>
                                            </div>
                                        </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-sm-3 col-form-label text-left">Password</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="password" value="" id="password" name="password">
                                            <?php echo form_error('password'); ?>
                                        </div>
                                    </div>


                                            <div class="form-group row">
                                                <div class="col-sm-3">
                                                <input class="form-control btn btn-primary" type="submit" value="Submit" name="submit" style="color: white">
                                                </div>
                                            </div>
                                    </form>
                                </div>


                                <div class="col-lg-6">



                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->



        </div><!-- container -->

        <footer class="footer text-center text-sm-left">
            &copy; 2019 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
        </footer><!--end footer-->
    </div>
    <!-- end page content -->
<?php $this->load->view('admin/scripts'); ?>