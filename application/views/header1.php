<section class="header-breadcrumb bgimage overlay overlay--dark">
    <div class="bg_image_holder"><img src="<?php echo base_url();?>assets/images/breadcrumb1.jpg" alt=""></div>
    <div class="mainmenu-wrapper">

        <div class="menu-area menu1 menu--light">
            <div class="top-menu-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-fullwidth">
                                <div class="logo-wrapper order-lg-0 order-sm-1">
                                    <div class="logo logo-top">
                                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>assets/images/111.png" alt="logo image" class="img-fluid" height="300px" width="300px"></a>
                                    </div>
                                </div><!-- ends: .logo-wrapper -->


                                <div class="menu-container order-lg-1 order-sm-0">
                                    <div class="d_menu">
                                        <nav class="navbar navbar-expand-lg mainmenu__menu">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                    data-target="#direo-navbar-collapse"
                                                    aria-controls="direo-navbar-collapse"
                                                    aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon icon-menu"><i class="la la-reorder"></i></span>
                                            </button>
                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="direo-navbar-collapse">
                                                <?php $this->load->view('navbar'); ?>
                                            </div>
                                            <!-- /.navbar-collapse -->
                                        </nav>
                                    </div>
                                </div>


                                <div class="menu-right order-lg-2 order-sm-2">
                                    <?php
                                    if(isset($_SESSION['matrimonial'])) {
                                        echo '  <div class="offcanvas-menu" style="display: block;">
                                            <a href="#" class="offcanvas-menu__user"><i class="la la-user"></i></a>
                                            <div class="offcanvas-menu__contents">
                                                <a href="#" class="offcanvas-menu__close"><i class="la la-times-circle"></i></a>
                                                <div class="author-avatar">
                                                    <img src="<?php echo base_url();?>assets/images/author-avatar.png" alt="" class="rounded-circle">
                                                </div>
                                                <ul class="list-unstyled">
                                                    <li><a href="Myprofile">My Profile</a></li>
                                                    <li><a href="Registration/logout">Logout</a></li>
                                                </ul>
                                              
                                            </div><!-- ends: .author-info -->
                                        </div><!-- ends: .offcanvas-menu -->';
                                    }
                                    elseif(isset($_SESSION['vendor'])){
                                        echo '  <div class="offcanvas-menu" style="display: block;">
                                            <a href="#" class="offcanvas-menu__user"><i class="la la-user"></i></a>
                                            <div class="offcanvas-menu__contents">
                                                <a href="#" class="offcanvas-menu__close"><i class="la la-times-circle"></i></a>
                                                <div class="author-avatar">
                                                    <img src="<?php echo base_url();?>assets/images/author-avatar.png" alt="" class="rounded-circle">
                                                </div>
                                                <ul class="list-unstyled">
                                                    <li><a href="Profile">My Profile</a></li>
                                                    <li><a href="Vendor">Add listing</a></li>
                                                    <li><a href="#">View listings</a></li>
                                                    <li><a href="#">Enquiries</a></li>
                                                    <li><a href="Registration/logout">Logout</a></li>
                                                </ul>
                                              
                                            </div><!-- ends: .author-info -->
                                        </div><!-- ends: .offcanvas-menu -->';
                                    }
                                    else{
                                        $this->load->view('loginsignup'); }?>


                                </div><!-- ends: .menu-right -->
                            </div>
                        </div>
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end  -->
        </div>

    </div><!-- ends: .mainmenu-wrapper -->

    <div class="breadcrumb-wrapper content_above">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="page-title"><?php echo $page; ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $page; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div><!-- ends: .breadcrumb-wrapper -->

</section>