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
                        <form action="/">
                            <div class="form-group">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter Title"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="desc" class="form-label">Long Description</label>
                                <textarea id="desc" rows="8" class="form-control"
                                          placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tagline" class="form-label">Tagline</label>
                                <input type="text" class="form-control" id="tagline"
                                       placeholder="Your Listing Motto or Tagline" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Pricing</label>
                                <div class="pricing-options">
                                    <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                        <input type="checkbox" class="custom-control-input" id="price_one" value="one" checked>
                                        <label class="custom-control-label" for="price_one">Price [USD]</label>
                                    </div>
                                    <span>Or</span>
                                    <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                        <input type="checkbox" class="custom-control-input" id="price_two" value="two">
                                        <label class="custom-control-label" for="price_two">Price Range</label>
                                    </div>
                                </div>
                                <div class="pricing-option-inputs">
                                    <input type="text" id="price-input" class="form-control"
                                           placeholder="Price of this listing Eg. 100">
                                    <div class="select-basic" id="price-input-range">
                                        <select class="form-control">
                                            <option>Select Price Range</option>
                                            <option>Ultra High ($$$$)</option>
                                            <option>Expensive ($$$)</option>
                                            <option>Moderate ($$)</option>
                                            <option>Cheap ($)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="short_desc" class="form-label">Short Description/Excerpt</label>
                                <textarea id="short_desc" rows="5" class="form-control"
                                          placeholder="Short Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="custom-field" class="form-label">Custom Select Option</label>
                                <div class="select-basic">
                                    <select class="form-control" id="custom-field">
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cf1" class="form-label">Custom Field 1</label>
                                <input type="text" class="form-control" id="cf1" placeholder="Enter Title" required>
                            </div>
                            <div class="form-group">
                                <label for="cdate" class="form-label">Custom Date</label>
                                <input type="date" class="form-control" id="cdate" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Custom Radio</label>
                                <div class="atbdp-radio-list">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadioOne" name="customRadioInline1"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioOne">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadioTwo" name="customRadioInline1"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioTwo">Female</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadioThree" name="customRadioInline1"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioThree">Other</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="location" class="form-label">Location</label>
                                <div class="select-basic">
                                    <select class="form-control" id="location">
                                        <option>Australia</option>
                                        <option>Sydney</option>
                                        <option>Newyork</option>
                                        <option>Los Angels</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="select-basic2">
                                    <label for="atbd_tags" class="form-label">Tags</label>
                                    <select class="form-control" id="atbd_tags" multiple="multiple">
                                        <option selected="selected">orange</option>
                                        <option>white</option>
                                        <option selected="selected">purple</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ad_categroy" class="form-label">Select Category</label>
                                <div class="select-basic">
                                    <select class="form-control ad_search_category" id="ad_categroy">
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
                        </form>
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
                        <form action="/">
                            <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary m-bottom-20">
                                <input type="checkbox" class="custom-control-input" id="hide_contace_info">
                                <label class="custom-control-label" for="hide_contace_info">Check it to hide contact
                                    information for this listing</label>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" placeholder="Listing Address eg. Houghton Street London WC2A 2AE UK"
                                       id="address" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="text" placeholder="Phone Number" id="phone_number" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="contact_email" class="form-label">Email</label>
                                <input type="email" id="contact_email" class="form-control" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label for="website_address" class="form-label">Website</label>
                                <input type="text" id="website_address" class="form-control"
                                       placeholder="Listing Website eg. http://example.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Social Information</label>

                                <div id="social_info_sortable_container">
                                    <div class="directorist atbdp_social_field_wrapper">
                                        <div class="row m-bottom-20" id="social-form-fields">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="select-basic">
                                                        <select class="form-control">
                                                            <option value="behance"> Behance</option>
                                                            <option value="dribbble"> Dribbble</option>
                                                            <option value="facebook"> Facebook</option>
                                                            <option value="flickr"> Flickr</option>
                                                            <option value="github"> Github</option>
                                                            <option value="google-plus"> Google+</option>
                                                            <option value="instagram"> Instagram</option>
                                                            <option value="linkedin"> LinkedIn</option>
                                                            <option value="pinterest"> Pinterest</option>
                                                            <option value="reddit"> Reddit</option>
                                                            <option value="snapchat-ghost"> Snapchat</option>
                                                            <option value="soundcloud"> SoundCloud</option>
                                                            <option value="stack-overflow"> StackOverFLow</option>
                                                            <option value="tumblr"> Tumblr</option>
                                                            <option value="twitter"> Twitter</option>
                                                            <option value="vimeo"> Vimeo</option>
                                                            <option value="vine"> Vine</option>
                                                            <option value="youtube"> Youtube</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="url" class="form-control directory_field atbdp_social_input" placeholder="eg. http://example.com" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-2 d-flex align-items-center">
                                                <span class="removeSocialField btn-danger" id="removeSocial" title="Remove this item"><i class="la la-times"></i></span>
                                                <span class="adl-move-icon btn-secondary"><i class="la la-arrows"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="copy-btn btn btn-sm btn-secondary"><i class="la la-plus"></i> Add New</button>
                            </div>
                        </form>
                    </div><!-- ends: .atbdb_content_module_contents -->
                </div><!-- ends: .atbd_content_module -->
            </div><!-- ends: .col-lg-10 -->
            <div class="col-lg-10 offset-lg-1">
                <div class="atbd_content_module">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-calendar-check-o"></span> Opening/Business Hour Information</h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">
                        <div class="business-hour">
                            <div class="row">
                                <div class="col-md-12 m-bottom-20">
                                    <div class="enable247hour custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                        <input type="checkbox" class="custom-control-input" name="enable247hour" value="1" id="enable247hour">
                                        <label for="enable247hour" class="not_empty custom-control-label"> Is this listing open 24 hours
                                            7 days a week? </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="bdbh_saturday" class="atbd_day_label form-label">Saturday</label>
                                        <div class="row atbd_row_bg">
                                            <div class="col-sm-6">
                                                <label for="bdbh_saturday" class="not_empty">Start time</label>
                                                <input type="time" id="bdbh_saturday" value=""
                                                       class="form-control directory_field">
                                            </div>
                                            <div class="col-sm-6 mt-3 mt-sm-0">
                                                <label for="bdbh_saturday_cls" class="not_empty">Close time</label>
                                                <input type="time" id="bdbh_saturday_cls" value=""
                                                       class="form-control directory_field">
                                            </div>
                                        </div>

                                        <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                            <input type="checkbox" class="custom-control-input" name="enable247hour" value="1" id="sat_cls">
                                            <label for="sat_cls" class="not_empty custom-control-label"> Mark as Closed </label>
                                        </div>
                                    </div><!-- ends: .form-group -->

                                    <div class="form-group">
                                        <label for="bdbh_sunday" class="atbd_day_label form-label">Sunday</label>
                                        <div class="row atbd_row_bg">
                                            <div class="col-sm-6">
                                                <label for="bdbh_sunday" class="not_empty">Start time</label>
                                                <input type="time" id="bdbh_sunday" value=""
                                                       class="form-control directory_field">
                                            </div>

                                            <div class="col-sm-6 mt-3 mt-sm-0">
                                                <label for="bdbh_sunday_cls" class="not_empty">Close time</label>
                                                <input type="time" id="bdbh_sunday_cls" value=""
                                                       class="form-control directory_field">
                                            </div>
                                        </div>

                                        <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                            <input type="checkbox" class="custom-control-input" name="enable247hour" value="1" id="sun_cls">
                                            <label for="sun_cls" class="not_empty custom-control-label"> Mark as Closed </label>
                                        </div>
                                    </div><!-- ends: .form-group -->

                                    <div class="form-group">
                                        <label for="bdbh_monday" class="atbd_day_label form-label">Monday</label>
                                        <div class="row atbd_row_bg">
                                            <div class="col-sm-6">
                                                <label for="bdbh_monday" class="not_empty">Start time</label>
                                                <input type="time" id="bdbh_monday" value=""
                                                       class="form-control directory_field">
                                            </div>

                                            <div class="col-sm-6 mt-3 mt-sm-0">
                                                <label for="bdbh_monday_cls" class="not_empty">Close time</label>
                                                <input type="time" id="bdbh_monday_cls" value=""
                                                       class="form-control directory_field">
                                            </div>
                                        </div>

                                        <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                            <input type="checkbox" class="custom-control-input" name="enable247hour" value="1" id="mon_cls">
                                            <label for="mon_cls" class="not_empty custom-control-label"> Mark as Closed </label>
                                        </div>
                                    </div><!-- ends: .form-group -->

                                    <div class="form-group">
                                        <label for="bdbh_tuesday" class="atbd_day_label form-label">Tuesday</label>
                                        <div class="row atbd_row_bg">
                                            <div class="col-sm-6">
                                                <label for="bdbh_tuesday" class="not_empty">Start time</label>
                                                <input type="time" id="bdbh_tuesday" value=""
                                                       class="form-control directory_field">
                                            </div>

                                            <div class="col-sm-6 mt-3 mt-sm-0">
                                                <label for="bdbh_tuesday_cls" class="not_empty">Close time</label>
                                                <input type="time" id="bdbh_tuesday_cls" value=""
                                                       class="form-control directory_field">
                                            </div>
                                        </div>

                                        <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                            <input type="checkbox" class="custom-control-input" name="enable247hour" value="1" id="tue_cls">
                                            <label for="tue_cls" class="not_empty custom-control-label"> Mark as Closed </label>
                                        </div>
                                    </div><!-- ends: .form-group -->

                                    <div class="form-group">
                                        <label for="bdbh_wednesday"
                                               class="atbd_day_label form-label">Wednesday</label>
                                        <div class="row atbd_row_bg">
                                            <div class="col-sm-6">
                                                <label for="bdbh_wednesday" class="not_empty">Start time</label>
                                                <input type="time" id="bdbh_wednesday" value=""
                                                       class="form-control directory_field">
                                            </div>

                                            <div class="col-sm-6 mt-3 mt-sm-0">
                                                <label for="bdbh_wednesday_cls" class="not_empty">Close time</label>
                                                <input type="time" id="bdbh_wednesday_cls" value=""
                                                       class="form-control directory_field">
                                            </div>
                                        </div>

                                        <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                            <input type="checkbox" class="custom-control-input" name="enable247hour" value="1" id="wed_cls">
                                            <label for="wed_cls" class="not_empty custom-control-label"> Mark as Closed </label>
                                        </div>
                                    </div><!-- ends: .form-group -->

                                    <div class="form-group">
                                        <label for="bdbh_thursday" class="atbd_day_label form-label">Thursday</label>
                                        <div class="row atbd_row_bg">
                                            <div class="col-sm-6">
                                                <label for="bdbh_thursday" class="not_empty">Start time</label>
                                                <input type="time" id="bdbh_thursday" value=""
                                                       class="form-control directory_field">
                                            </div>

                                            <div class="col-sm-6 mt-3 mt-sm-0">
                                                <label for="bdbh_thursday_cls" class="not_empty">Close time</label>
                                                <input type="time" id="bdbh_thursday_cls" value=""
                                                       class="form-control directory_field">
                                            </div>
                                        </div>

                                        <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                            <input type="checkbox" class="custom-control-input" name="enable247hour" value="1" id="thu_cls">
                                            <label for="thu_cls" class="not_empty custom-control-label"> Mark as Closed </label>
                                        </div>
                                    </div><!-- ends: .form-group -->

                                    <div class="form-group">
                                        <label for="bdbh_friday" class="atbd_day_label form-label">Friday</label>
                                        <div class="row atbd_row_bg">
                                            <div class="col-sm-6">
                                                <label for="bdbh_friday" class="not_empty">Start time</label>
                                                <input type="time" id="bdbh_friday" value=""
                                                       class="form-control directory_field">
                                            </div>

                                            <div class="col-sm-6 mt-3 mt-sm-0">
                                                <label for="bdbh_friday_cls" class="not_empty">Close time</label>
                                                <input type="time" id="bdbh_friday_cls" value=""
                                                       class="form-control directory_field">
                                            </div>
                                        </div>

                                        <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                            <input type="checkbox" class="custom-control-input" name="enable247hour" value="1" id="fri_cls">
                                            <label for="fri_cls" class="not_empty custom-control-label"> Mark as Closed </label>
                                        </div>
                                    </div><!-- ends: .form-group -->

                                </div> <!--ends col-md-6 col-sm-12-->
                            </div> <!--ends .row-->
                        </div>
                    </div><!-- ends: .atbdb_content_module_contents -->
                </div><!-- ends: .atbd_content_module -->
            </div><!-- ends: .col-lg-10 -->

            <div class="col-lg-10 offset-lg-1">
                <div class="atbd_content_module">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-calendar-check-o"></span> Listing FAQs</h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">
                        <div id="faqs_info_sortable_container" class="ui-sortable">
                            <div class="directorist row atbdp_faqs_wrapper" id="faqsID-0">
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <!-- <label></label>-->
                                        <input type="text" placeholder="Question" name="faqs[0][quez]"
                                               id="atbdp_social" class="form-control atbdp_faqs_quez">

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <!--<label></label>-->
                                        <textarea rows="3" placeholder="Answer" name="faqs[0][ans]"
                                                  class="form-control directory_field atbdp_faqs_input"
                                                  required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <span class="removeFAQSField btn-danger" id="removeFAQ" title="Remove this item"><i class="la la-times"></i></span>
                                    <span class="adl-move-icon btn-secondary"><i class="la la-arrows"></i></span>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary btn-sm m-top-20" id="addNewFAQS">
                            <span class="plus-sign">+</span>
                            Add New
                        </button>
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
                                               placeholder="Enter Latitude eg. 24.89904">
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <div class="form-group">
                                        <label for="manual_lng" class="not_empty"> Longitude </label>
                                        <input type="text" name="manual_lng" id="manual_lng"
                                               class="form-control directory_field"
                                               placeholder="Enter Longitude eg. 91.87198">
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

            <div class="col-lg-10 offset-lg-1">
                <div class="atbd_content_module">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-calendar-check-o"></span> Images & Video</h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">
                        <div id="_listing_gallery">
                            <div class="add_listing_form_wrapper" id="gallery_upload">
                                <div class="form-group text-center">
                                    <!--  add & remove image links -->
                                    <p class="hide-if-no-js">
                                        <a href="#" class="upload-header btn btn-outline-secondary">Upload Preview Image</a>
                                    </p>
                                </div>
                                <div class="form-group text-center">
                                    <!-- image container, which can be manipulated with js -->
                                    <div class="listing-img-container">
                                        <img src="img/picture.png" alt="No Image Found">
                                        <p>No Images</p>
                                    </div>
                                    <!--  add & remove image links -->
                                    <p class="hide-if-no-js">
                                        <a href="#" id="listing_image_btn" class="btn btn-outline-primary m-right-10">
                                            <span class="dashicons dashicons-format-image"></span> Upload Slider Images
                                        </a><a id="delete-custom-img" class="btn btn-outline-danger hidden" href="#"> Remove Images</a><br>
                                    </p>
                                </div>
                            </div> <!--ends add_listing_form_wrapper-->
                        </div>
                        <div class="form-group m-top-30">
                            <label for="videourl" class="not_empty form-label">Video Url</label>
                            <input type="text" id="videourl" name="videourl" value=""
                                   class="form-control directory_field" placeholder="Only YouTube & Vimeo URLs.">
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

        </div>
    </div>
</section><!-- ends: .add-listing-wrapper -->

<?php $this->load->view('footer'); ?>

<?php $this->load->view('js-links'); ?>
