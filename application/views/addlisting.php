<?php $this->load->view('css-links'); ?>

<?php $this->load->view('header1'); ?>


<section class="add-listing-wrapper border-bottom section-bg section-padding-strict">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="atbd_content_module">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-user"></span>General Information</h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">
                        <form action="<?php echo base_url()?>vendor/addlist" method="post">
                            <div class="form-group">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"  placeholder="Enter Title"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="desc" class="form-label">Long Description</label>
                                <textarea id="desc" rows="8" name="description" class="form-control"
                                          placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tagline" class="form-label">Tagline</label>
                                <input type="text" class="form-control" id="tagline"
                                      name="tagline" placeholder="Your Listing Motto or Tagline" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Pricing</label>
                                <div class="select-basic">
                                    <select class="form-control" name="pricing">
                                        <option value="">Select Price Range</option>
                                        <option value="Ultra high">Ultra High ($$$$)</option>
                                        <option value="Expensive">Expensive ($$$)</option>
                                        <option value="Moderate">Moderate ($$)</option>
                                        <option value="Cheap">Cheap ($)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="select-basic2">
                                    <label for="atbd_tags" class="form-label">Tags</label>
                                    <select class="form-control" name="tags" id="atbd_tags" multiple="multiple" name="tags">
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
                                        <option>Select Category</option>
                                        <option>Restaurant</option>
                                        <option>&nbsp;&nbsp; Food</option>
                                        <option>&nbsp;&nbsp; Lunch Pack</option>
                                        <option>Places</option>
                                        <option>&nbsp;&nbsp; Travel</option>
                                        <option>&nbsp;&nbsp; Booking</option>
                                        <option>&nbsp;&nbsp; Hotel</option>
                                        <option>&nbsp;&nbsp; Location</option>
                                        <option>Shopping</option>
                                        <option>&nbsp;&nbsp; Accessories</option>
                                        <option>&nbsp;&nbsp; Clothing</option>
                                        <option>&nbsp;&nbsp; Gadgets</option>
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
                                <input type="text" placeholder="Listing Address eg. Houghton Street London WC2A 2AE UK"
                                       name="address" id="address" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="text" placeholder="Phone Number" name="telephone" id="phone_number" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="contact_email" class="form-label">Email</label>
                                <input type="email" name="email" id="contact_email" class="form-control" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label for="website_address" class="form-label">Website</label>
                                <input type="text" id="website_address" name="website" class="form-control"
                                       placeholder="Listing Website eg. http://example.com">
                            </div>


                    </div><!-- ends: .atbdb_content_module_contents -->
                </div><!-- ends: .atbd_content_module -->
            </div><!-- ends: .col-lg-10 -->




            <div class="col-lg-10 offset-lg-1">
                <div class="atbd_content_module">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-calendar-check-o"></span> Location (Map)</h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">
                        <label class="not_empty form-label">Set the Marker by clicking anywhere on the Map</label>
                        <div class="map" id="map-one"></div>
                        <div class="cor-wrap form-group">
                            <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                <input type="checkbox" class="custom-control-input" name="manual_coordinate" value="1" id="manual_coordinate">
                                <label for="manual_coordinate" class="not_empty custom-control-label">Or Enter Coordinates (latitude and longitude) Manually. </label>
                            </div>
                        </div>
                        <div class="cor-form">
                            <div id="hide_if_no_manual_cor" class="clearfix row m-bottom-30">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="manual_lat" class="not_empty"> Latitude </label>
                                        <input type="text" name="manual_lat" id="manual_lat"
                                               class="form-control directory_field"
                                               name="latitude" placeholder="Enter Latitude eg. 24.89904">
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <div class="form-group">
                                        <label for="manual_lng" class="not_empty"> Longitude </label>
                                        <input type="text" name="manual_lng" id="manual_lng"
                                               class="form-control directory_field"
                                               name="longitude" placeholder="Enter Longitude eg. 91.87198">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group lat_btn_wrap m-top-15">
                                        <button class="btn btn-primary" id="generate_admin_map">Generate on Map
                                        </button>
                                    </div>
                                </div> <!-- ends #hide_if_no_manual_cor-->
                            </div>
                            <div class="form-group">
                                <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                    <input type="checkbox" class="custom-control-input" name="hide_map" value="1" id="hide_map">
                                    <label for="hide_map" class="not_empty custom-control-label">Hide map for this listing.</label>
                                </div>
                            </div>
                        </div>
                    </div><!-- ends: .atbdb_content_module_contents -->
                </div><!-- ends: .atbd_content_module -->
            </div><!-- ends: .col-lg-10 -->

            

            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="atbd_term_and_condition_area custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                    <input type="checkbox" class="custom-control-input" name="listing_t" value="1" id="listing_t">
                    <label for="listing_t" class="not_empty custom-control-label">I Agree with all <a href="" id="listing_t_c">Terms & Conditions</a></label>
                </div>

                <div class="btn_wrap list_submit m-top-25">
                    <button type="submit" class="btn btn-primary btn-lg listing_submit_btn">Submit listing</button>
                </div>
            </div><!-- ends: .col-lg-10 -->
            </form>
        </div>
    </div>
</section><!-- ends: .add-listing-wrapper -->
<?php $this->load->view('footer'); ?>

<?php $this->load->view('js-links'); ?>