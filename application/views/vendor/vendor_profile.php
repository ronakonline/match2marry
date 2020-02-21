<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('vendor/topnav'); ?>
<?php $this->load->view('vendor/v_sidenav'); ?>

    <!-- Page Content-->
    <div class="page-content">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">Profile</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body  met-pro-bg">
                            <div class="met-profile">
                                <div class="row">
                                    <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                        <div class="met-profile-main">
                                            <div class="met-profile-main-pic">
                                                <img src="<?php echo base_url(); ?>assets/admin/images/users/user-4.jpg" alt="" class="rounded-circle">
                                                <span class="fro-profile_main-pic-change">
                                                            <i class="fas fa-camera"></i>
                                                        </span>
                                            </div>
                                            <div class="met-profile_user-detail">
                                                <h5 class="met-user-name"><?php echo $_SESSION['vendor'][0]->title; ?></h5>
<!--                                                <p class="mb-0 met-user-name-post">--><?php //echo $_SESSION['vendor'][0]->gender; ?><!-- - --><?php //echo $_SESSION['vendor'][0]->dob; ?><!--</p>-->
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-4 ml-auto">
                                        <ul class="list-unstyled personal-detail">
                                            <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> phone </b><?php echo $_SESSION['vendor'][0]->telephone; ?></li>
                                            <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> Email </b> : <?php echo $_SESSION['vendor'][0]->email; ?></li>
                                        </ul>
                                        <div class="button-list btn-social-icon">
                                            <button type="button" class="btn btn-blue btn-round">
                                                <i class="fab fa-facebook-f"></i>
                                            </button>

                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end f_profile-->
                        </div><!--end card-body-->
                        <div class="card-body">
                            <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="general_detail_tab" data-toggle="pill" href="#general_detail">General info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Personal_detail_tab" data-toggle="pill" href="#personal_detail">Professional info</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="user_detail_tab" data-toggle="pill" href="#user_detail">User info</a>
                                </li>

                                <li class="nav-item">
<!--                                    <a class="nav-link" id="user_detail_tab" data-toggle="pill" href="#user_detail">User info</a>-->
                                    <a href="<?php echo base_url().'VendorRegistration/openupdate';?>" style="margin-left:10px; " class="nav-link btn btn-primary">Update</a>

                                </li>
                            </ul>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
            <div class="row">
                <div class="col-12">
                    <div class="tab-content detail-list" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="general_detail">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img src="<?php echo base_url(); ?>assets/admin/images/small/user-pro.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="met-basic-detail">
                                                        <h3><?php  echo $_SESSION['vendor'][0]->title;?></h3>
                                                        <p class="text-uppercase font-14"><?php  echo $_SESSION['vendor'][0]->tagline;?></p>
                                                        <p class="text-muted font-14">
                                                            <?php  echo $_SESSION['vendor'][0]->description;?>
                                                        </p>

                                                        <!-- <div class="my-3">
                                                            <button class="btn btn-primary px-3">Hire Me</button>
                                                            <button class="btn btn-outline-primary  px-3">My Portfolio</button>
                                                        </div>  -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end general detail-->

                        <div class="tab-pane fade show" id="personal_detail">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="education-activity">
                                                <div class="">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0">Price</h6>
                                                    </div>
                                                    <p class="text-muted mt-3"><?php  echo $_SESSION['vendor'][0]->price;?>
                                                    </p>

                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0">Tags</h6>
                                                    </div>
                                                    <p class="text-muted mt-3"><?php  echo $_SESSION['vendor'][0]->tags;?>
                                                    </p>


                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0">Category</h6>
                                                    </div>
                                                    <p class="text-muted mt-3"><?php  echo $_SESSION['vendor'][0]->category;?>
                                                    </p>


                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0">Address</h6>
                                                    </div>
                                                    <p class="text-muted mt-3"><?php  echo $_SESSION['vendor'][0]->address;?>
                                                    </p>

                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0">Website</h6>
                                                    </div>
                                                    <p class="text-muted mt-3"><?php  echo $_SESSION['vendor'][0]->website;?>
                                                    </p>

                                                </div><!--end activity-->
                                            </div><!--end education-activity-->
                                        </div>  <!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->


                            </div>
                        </div>

                        <div class="tab-pane fade" id="user_detail">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="education-activity">
                                                <div class="">


                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0">Contact number</h6>
                                                    </div>
                                                    <p class="text-muted mt-3"><?php  echo $_SESSION['vendor'][0]->telephone;?>
                                                    </p>

                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0">Email</h6>
                                                    </div>
                                                    <p class="text-muted mt-3"><?php  echo $_SESSION['vendor'][0]->email;?>
                                                    </p>

                                                    <div class="d-flex justify-content-between align-items-center" style="margin-top: 10px;">
                                                        <h6 class="m-0">Profile Photo</h6>
                                                        <span class="dripicons-download"></span>
                                                    </div>



                                                    <div class="d-flex justify-content-between align-items-center" style="margin-top: 10px;">
                                                        <h6 class="m-0">ID Proof</h6>
                                                        <span class="dripicons-download"></span>
                                                    </div>



                                                    <div class="d-flex justify-content-between align-items-center" style="margin-top: 10px;">
                                                        <h6 class="m-0">Bio Data</h6>
                                                        <span class="dripicons-download"></span>
                                                    </div>



                                                </div><!--end activity-->
                                            </div><!--end education-activity-->
                                        </div>  <!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div>

                        </div><!--end education detail-->

                    </div><!--end tab-content-->

                </div><!--end col-->
            </div><!--end row-->

        </div><!-- container -->

        <?php $this->load->view('admin/footer'); ?>
        <!--end footer-->
    </div>
    <!-- end page content -->
<?php $this->load->view('admin/scripts'); ?>