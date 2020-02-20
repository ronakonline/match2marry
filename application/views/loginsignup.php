<!-- start .author-area -->
<div class="author-area">
	<div class="author__access_area">
		<ul class="d-flex list-unstyled align-items-center">

			<li>
				<a href="#" class="access-link" data-toggle="modal" data-target="#login_modal">Login</a>
				<span>or</span>
				<a href="#" class="access-link" data-toggle="modal" data-target="#signup_modal">Register</a>

			</li>
		</ul>
	</div>
</div>

<!-- end .author-area -->
<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal_label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="login_modal_label"><i class="la la-lock"></i> Sign In</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="http://aazztech.com/" id="login-form">
					<input type="text" class="form-control" placeholder="Username or Email" required>
					<input type="password" class="form-control" placeholder="Password" required>
					<div class="keep_signed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
						<input type="checkbox" class="custom-control-input" name="keep_signed_in" value="1" id="keep_signed_in">
						<select class="form-control" id="ltype">
							<option value="Matrimonial">Matrimonial</option>
							<option value="Services">Services</option>

						</select>
						<label for="keep_signed_in" class="not_empty custom-control-label">Keep me signed in</label>
					</div>
					<button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Sign In</button>
				</form>

				<div class="form-excerpts">
					<ul class="list-unstyled">
						<li>Not a member? <a href="#" class="access-link" data-dismiss="modal" data-toggle="modal" data-target="#signup_modal">Sign up</a></li>
						<li><a href="#">Recover Password</a></li>
					</ul>

				</div>

			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="signup_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i> Sign Up</h5>
				<button type="button" onclick="" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form  id="signup-form">
					<select class="form-control" id="rtype">
						<option value="Matrimonial">Matrimonial</option>
						<option value="Services">Services</option>

					</select>
					<button  type="button" onclick="return redirectR();" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Sign Up</button>
				</form>

				<div class="form-excerpts">
					<ul class="list-unstyled">
						<li>Already a member? <a href="#" class="access-link " data-dismiss="modal" data-toggle="modal" data-target="#login_modal">Sign In</a></li>

					</ul>

				</div>

			</div>
		</div>
	</div>
</div>
<script>
    function redirectR(){
        var rtype = document.getElementById("rtype");
        if(rtype.value != ""){
            if(rtype.value==="Services"){
                window.location ="<?php echo base_url(); ?>VendorRegistration";
            }else{
                window.location = "<?php echo base_url(); ?>Matrimonial";
                return false;
            }
        }
    }
</script>



