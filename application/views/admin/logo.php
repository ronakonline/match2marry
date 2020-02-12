<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/topnav'); ?>
<?php $this->load->view('admin/sidenav'); ?>


 <!-- Page Content-->
<div class="page-content">
	<?php if (isset($_SESSION['output'])) {
        if ($_SESSION['output'] == 1) {
            echo '<script>swal("Updated!", "Contact Information updated successfully", "success");</script>';
        }
        else{
            echo '<script>swal("Error", "Error in updating contact Information", "error");</script>';   
        }
        unset($_SESSION['output']);

     }
    ?>
    <div class="container-fluid">
        <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <h4 class="page-title">LOGO Upload</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                	<form enctype="multipart/form-data" action="<?php base_url()?>Admin_logo/do_upload" method="post">
                    <div class="card-body">
                        <p class="text-muted mb-3">Browse or drop your logo image file</p>
                        <input type="file"  name="logo" id="input-file-now" class="dropify" />                                                   
                        <button type="submit" style="margin-top: 5px;" class="btn btn-primary">Upload</button>
                    </div><!--end card-body-->
                    </form>
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->

    </div><!-- container -->

    <?php $this->load->view('admin/footer'); ?>
	<!--end footer-->
</div>
<!-- end page content -->
<?php $this->load->view('admin/scripts'); ?>