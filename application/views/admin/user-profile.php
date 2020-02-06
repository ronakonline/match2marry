<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/topnav'); ?>
<?php $this->load->view('admin/sidenav'); ?>
<?php foreach ($mydata as $row){} ?>
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
                                                        <h5 class="met-user-name"><?php echo $row->name; ?></h5>
                                                        <p class="mb-0 met-user-name-post"><?php echo $row->gender; ?> - <?php echo $row->dob; ?></p>
                                                    </div>
                                                </div>                                                
                                            </div><!--end col-->
                                            <div class="col-lg-4 ml-auto">
                                                <ul class="list-unstyled personal-detail">
                                                    <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> phone </b> : +91 23456 78910</li>
                                                    <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> Email </b> : <?php echo $row->email; ?></li>
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
                                            <a class="nav-link" id="Personal_detail_tab" data-toggle="pill" href="#personal_detail">Personal info</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="education_detail_tab" data-toggle="pill" href="#education_detail">Career & Education</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="user_detail_tab" data-toggle="pill" href="#user_detail">User info</a>
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
                                                                <h3>Full Name</h3>
                                                                <p class="text-uppercase font-14">Profession</p>
                                                                <p class="text-muted font-14">
                                                                     There are many variations of passages of Lorem Ipsum available, 
                                                                     but the majority have suffered alteration in some form, by injected humour, 
                                                                     or randomised words which don't look even slightly believable. 
                                                                     If you are going to use a passage of Lorem Ipsum, you need to be sure there 
                                                                     isn't anything embarrassing hidden in the middle of text.
                                                                     All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.
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
                                                                    <h6 class="m-0">Marital Status</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">Unmarried
                                                                </p>
                                                            
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">Children</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">No
                                                                </p>


                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">hight</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">5.5
                                                                </p>
                                                            
                                                        
                                                            
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">Physique</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">Slim
                                                                </p>
                                                            
                                                        
                                                            
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">Health</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">Minor Health problems
                                                                </p>

                                                                
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">Way of living</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">Simple
                                                                </p>


                                                        </div><!--end activity-->
                                                    </div><!--end education-activity-->
                                                </div>  <!--end card-body-->                                     
                                            </div><!--end card-->
                                        </div><!--end col-->

                                        <div class="col-lg-6">
                                            <div class="card">                                       
                                                <div class="card-body"> 
                                                    <div class="education-activity">
                                                        <div class="">
                                                                

                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">Family/Tribe</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">Khan
                                                                </p>

                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">Religious Practice</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">Zakat
                                                                </p>


                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">School of thoughts</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">Shafai
                                                                </p>

                                                                
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">When he want to marry</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">With in 2 months
                                                                </p>


                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">Nationality</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">Indian
                                                                </p>
                                                        </div><!--end activity-->
                                                    </div><!--end education-activity-->
                                                </div>  <!--end card-body-->                                     
                                            </div><!--end card-->
                                        </div><!--end col-->                                       
                                    </div>                                       
                                </div>

                                <div class="tab-pane fade" id="education_detail"> 
                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">                                       
                                                <div class="card-body"> 
                                                    
                                                    <div class="education-activity">
                                                        <div class="">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">Education</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">BCA
                                                                </p>
                                                            
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">Work profession</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">Doctor
                                                                </p>


                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">Native language</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">Arabic
                                                                </p>
                                                            
                                                        
                                                            
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">Languages he knows</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">English Gujarati
                                                                </p>
                                                            
                                                        
                                                            
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">Earning Currency</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">USA Dollar
                                                                </p>

                                                                
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">Monthly salary</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">76000
                                                                </p>


                                                        </div><!--end activity-->
                                                    </div><!--end education-activity-->
                                                </div>  <!--end card-body-->                                     
                                            </div><!--end card-->
                                        </div><!--end col-->
                                    </div>                                                       
                                    
                                </div><!--end education detail-->

                                <div class="tab-pane fade" id="user_detail"> 
                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">                                       
                                                <div class="card-body"> 
                                                    
                                                    <div class="education-activity">
                                                        <div class="">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">Father name</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">Sureshbhai
                                                                </p>
                                                            
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="m-0">Contact number</h6>
                                                                </div>
                                                                <p class="text-muted mt-3">9845454545
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