<?php $this->load->view('css-links'); ?>



<section class="add-listing-wrapper border-bottom section-bg section-padding-strict">
    <div class="container">
        <?php
        foreach ($my_data as $row){
        }?>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="atbd_content_module">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-user"></span>General Information</h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">
                        <form action="./update/<?php echo $_SESSION['vendor'][0]->id;?>" method="post">
                            <div class="form-group">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="title" value="<?php echo $row->title; ?>"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="desc" class="form-label">Long Description</label>
                                <textarea name="description" id="desc" rows="8" class="form-control"><?php echo $row->description; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tagline" class="form-label">Tagline</label>
                                <input type="text" class="form-control" name="tagline" id="tagline"
                                       value="<?php echo $row->tagline; ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Pricing</label>
                                <div class="select-basic">
                                    <select class="form-control" name="price">
                                        <option value="<?php echo $row->price; ?>"><?php echo $row->price; ?></option>
                                        <option value="Ultra High">Ultra High ($$$$)</option>
                                        <option value="Expensive">Expensive ($$$)</option>
                                        <option value="Moderate">Moderate ($$)</option>
                                        <option value="Cheap">Cheap ($)</option>
                                    </select>
                                </div>
                            </div>




                            <div class="form-group">
                                <div class="select-basic2">
                                    <label for="atbd_tags" class="form-label">Tags</label>
                                    <select class="form-control" name="tags" id="atbd_tags" multiple="multiple">
                                        <option selected value="<?php echo $row->tags; ?>"><?php echo $row->tags; ?></option>
                                        <option value="orange">orange</option>
                                        <option value="white">white</option>
                                        <option value="purple">purple</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ad_categroy" class="form-label">Select Category</label>
                                <div class="select-basic">
                                    <select class="form-control ad_search_category" name="category" id="ad_categroy">
                                        <option value="<?php echo $row->category; ?>"><?php echo $row->category; ?></option>
                                        <option>Restaurant</option>
                                        <option>Food</option>
                                        <option>Lunch Pack</option>
                                        <option>Places</option>
                                        <option>Travel</option>
                                        <option>Booking</option>
                                        <option>Hotel</option>
                                        <option>Location</option>
                                        <option>Shopping</option>
                                        <option>Accessories</option>
                                        <option>Clothing</option>
                                        <option>Gadgets</option>
                                    </select>
                                </div>
                            </div><!-- ends: .form-group -->

                    </div><!-- ends: .atbdb_content_module_contents -->
                </div><!-- ends: .atbd_content_module -->
            </div><!-- ends: .col-lg-10 -->
            <div class="col-lg-10 offset-lg-1">
                <div class="atbd_content_module">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-user"></span>Contact Information</h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">


                        <div class="form-group">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" value="<?php echo $row->address; ?>"
                                   name="address" id="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" value="<?php echo $row->telephone; ?>" name="telephone" id="phone_number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="contact_email" class="form-label">Email</label>
                            <input type="email" value="<?php echo $row->email; ?>" name="email" id="contact_email" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" value="<?php echo $row->password; ?>" name="password" id="password" class="form-control" placeholder="Enter password" required>
                        </div>
                        <div class="form-group">
                            <label for="website_address" class="form-label">Website</label>
                            <input type="text" value="<?php echo $row->website; ?>" name="website" id="website_address" class="form-control"
                                   placeholder="Listing Website eg. http://example.com">
                        </div>

                        <div class="col-lg-10 offset-lg-1 text-center">
                            <!--                            <div class="atbd_term_and_condition_area custom-control custom-checkbox checkbox-outline checkbox-outline-primary">-->
                            <!--                                <input type="checkbox" class="custom-control-input" name="listing_t" value="1" id="listing_t">-->
                            <!--                                <label for="listing_t" class="not_empty custom-control-label">I Agree with all <a href="" id="listing_t_c">Terms & Conditions</a></label>-->
                            <!--                            </div>-->

                            <div class="btn_wrap list_submit m-top-25">
                                <button type="submit" class="btn btn-primary btn-lg listing_submit_btn">Update listing</button>
                            </div>
                        </div><!-- ends: .col-lg-10 -->

                        </form>
                    </div><!-- ends: .atbdb_content_module_contents -->
                </div><!-- ends: .atbd_content_module -->
            </div><!-- ends: .col-lg-10 -->


        </div>
    </div>
</section><!-- ends: .add-listing-wrapper -->

<?php $this->load->view('footer'); ?>

<?php $this->load->view('js-links'); ?>
