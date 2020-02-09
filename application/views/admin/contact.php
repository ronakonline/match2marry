<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/topnav'); ?>
<?php $this->load->view('admin/sidenav'); ?>

			<div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                
                                <h4 class="page-title">Contact Information</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">        
                                    <?php
                                                foreach ($my_data as $row){
                                            }?>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-3 col-form-label text-left">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="email" value="<?php echo $row->email; ?>" id="example-email-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-3 col-form-label text-left">Telephone</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="tel" value="<?php echo $row->telephone; ?>" id="example-tel-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-3 col-form-label text-left">Address</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="5" id="message">
                                                        <?php echo $row->address; ?>
                                                    </textarea>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary col-sm-3">Save</button>
                                        </div>
                                    </div>                                                                      
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->

                <?php $this->load->view('admin/footer'); ?>
                <!--end footer-->
            </div>
<?php $this->load->view('admin/scripts'); ?>