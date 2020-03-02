<?php $this->load->view('css-links'); ?>

<?php $this->load->view('header1'); ?>

<section class="directory_listiing_detail_area single_area section-bg section-padding-strict">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="atbd_content_module atbd_listing_details">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-file-text-o"></span>About <?php echo $_SESSION['matrimonial'][0]->name; ?></h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa kequi officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tium dolorem que laudantium, totam rem aperiam the eaque ipsa quae abillo was inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo. Nemo ucxqui officia voluptatem accu santium doloremque laudantium, totam rem ape dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                    </div>
                </div><!-- ends: .atbd_content_module -->


                <div class="atbd_content_module atbd_listing_features">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-list-alt"></span>Basic Details</h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">
                        <ul class="atbd_custom_fields features-table">
                            <!--  get data from custom field-->
                            <li>
                                <div class="atbd_custom_field_title">
                                    <p>Education: </p>
                                </div>
                                <div class="atbd_custom_field_content">
                                    <p><?php echo $_SESSION['matrimonial'][0]->education; ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="atbd_custom_field_title">
                                    <p>Work Profession:</p></div>
                                <div class="atbd_custom_field_content">
                                    <p><?php echo $_SESSION['matrimonial'][0]->wp; ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="atbd_custom_field_title">
                                    <p>Languages Known:</p></div>
                                <div class="atbd_custom_field_content">
                                    <p><?php echo $_SESSION['matrimonial'][0]->languageknown; ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- ends: .atbd_content_module -->


                <div class="widget atbd_widget widget-card contact-block">
                    <div class="atbd_widget_title">
                        <h4><span class="la la-envelope"></span> Contact Form</h4>
                    </div><!-- ends: .atbd_widget_title -->
                    <div class="atbdp-widget-listing-contact contact-form">
                        <form id="atbdp-contact-form" class="form-vertical" role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="atbdp-contact-name" placeholder="Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="atbdp-contact-email" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="atbdp-contact-message" rows="6" placeholder="Message" required=""></textarea>
                            </div>
                            <button type="submit" class="btn btn-gradient btn-gradient-one btn-block">Send Message</button>
                        </form>
                    </div><!-- ends: .atbdp-widget-listing-contact -->
                </div><!-- ends: .widget -->




            </div>
            <div class="col-lg-4 mt-5 mt-lg-0">

                <div class="atbd_single_listing ">
                    <article class="atbd_single_listing_wrapper">
                        <figure class="atbd_listing_thumbnail_area">
                            <div class="atbd_listing_image" >
                                <a href="#">
                                    <img src="<?php echo base_url();?>assets/pdf/<?php echo $_SESSION['matrimonial'][0]->profilephoto; ?>" alt="listing image" height="310" width="220" >
                                </a>
                            </div><!-- ends: .atbd_listing_image -->


                        </figure><!-- ends: .atbd_listing_thumbnail_area -->

                        <div class="atbd_listing_info">
                            <div class="atbd_content_upper">
                                <h4 class="atbd_listing_title">
                                    <a href="#"><?php echo $_SESSION['matrimonial'][0]->name; ?></a>
                                </h4>


                                <div class="atbd_listing_data_list">
                                    <ul>

                                        <li>
                                            <p><span class="la la-user"></span>31 Years - <?php echo $_SESSION['matrimonial'][0]->height; ?>.<?php echo $_SESSION['matrimonial'][0]->inch; ?> Ft </p>
                                        </li>
                                        <li>
                                            <p><span class="la la-book"></span>Muslim-<?php echo $_SESSION['matrimonial'][0]->religiouspractice; ?></p>
                                        </li>
                                        <li>
                                            <p><span class="la la-briefcase"></span><?php echo $_SESSION['matrimonial'][0]->wp; ?></p>
                                        </li>
                                        <li>
                                            <p><span class="la la-map-marker"></span>Dhaka, Bangladesh</p>
                                        </li>
                                    </ul>
                                </div><!-- End atbd listing meta -->

                            </div><!-- end .atbd_content_upper -->


                        </div><!-- ends: .atbd_listing_info -->
                    </article><!-- atbd_single_listing_wrapper -->
                </div>


                <div class="widget atbd_widget widget-card">
                    <div class="atbd_widget_title">
                        <h4><span class="la la-user-plus"></span>General Details</h4>
                    </div><!-- ends: .atbd_widget_title -->
                    <div class="directory_open_hours">
                        <ul>
                            <li class="atbd_open">
                                <span class="day">Maritial Status</span>
                                <div class="atbd_open_close_time">
                                    <span class="time"><?php echo $_SESSION['matrimonial'][0]->ms; ?></span>
                                </div>
                            </li>
                            <li class="atbd_open">
                                <span class="day">Phsique</span>
                                <div class="atbd_open_close_time">
                                    <span class="time"><?php echo $_SESSION['matrimonial'][0]->physique; ?></span>
                                </div>
                            </li>
                            <li class="atbd_open ">
                                <span class="day">Health</span>
                                <div class="atbd_open_close_time">
                                    <span class="time"><?php echo $_SESSION['matrimonial'][0]->health; ?></span>
                                </div>
                            </li>
                            <li class="atbd_open">
                                <span class="day">Way of Living</span>
                                <div class="atbd_open_close_time">
                                    <span class="time"><?php echo $_SESSION['matrimonial'][0]->wayofliving; ?></span>
                                </div>
                            </li>
                            <li class="atbd_open">
                                <span class="day">Family/Tribe</span>
                                <div class="atbd_open_close_time">
                                    <span class="time"><?php echo $_SESSION['matrimonial'][0]->tribe; ?></span>
                                </div>
                            </li>
                            <li class="atbd_open">
                                <span class="day">Religious Practice</span>
                                <div class="atbd_open_close_time">
                                    <span class="time"><?php echo $_SESSION['matrimonial'][0]->religiouspractice; ?></span>
                                </div>
                            </li>
                            <li class="atbd_open">
                                <span class="day">Fiqh/School of Thoughts</span>
                                <span><?php echo $_SESSION['matrimonial'][0]->fiqh; ?></span>
                            </li>

                        </ul>
                    </div>
                </div><!-- ends: .widget -->


            </div>
        </div>
    </div>
</section><!-- ends: .directory_listiing_detail_area -->

<?php $this->load->view('footer'); ?>

<?php $this->load->view('js-links'); ?>
