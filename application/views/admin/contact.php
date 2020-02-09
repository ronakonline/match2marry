<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/topnav'); ?>
<?php $this->load->view('admin/sidenav'); ?>

			<div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Others</a></li>
                                        <li class="breadcrumb-item active">Form Elements</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Form Elements</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Textual inputs</h4>
                                    <p class="text-muted mb-3">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each
                                        textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.
                                    </p>
                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label text-right">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Telephone</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                                                </div>
                                            </div>
                                            <div class="row">
                                            	<div class="col-md-12">                            
                                                	<div class="form-group">
                                                    	<label for="message">Message</label>
                                                    	<textarea class="form-control" rows="5" id="message"></textarea>
                                                	</div>
                                            	</div>
                                        	</div>
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