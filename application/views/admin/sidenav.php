<div class="page-wrapper">
<div class="left-sidenav">
    <div class="main-icon-menu">
        <nav class="nav">
            <a href="#MetricaAnalytic" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Analytics">
                <svg class="nav-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M379.4 178.3l-87.2 133.4C299 320 303 330.5 303 342c0 26.5-21.5 48-48 48s-48-21.5-48-48c0-3 .3-6 .8-8.9l-57.6-33.5c-8.6 8.3-20.3 13.4-33.3 13.4-8.6 0-16.6-2.3-23.6-6.2L32 364.2v57.2c0 23.5 19.2 42.7 42.7 42.7h362.7c23.5 0 42.7-19.2 42.7-42.7V208.8l-58.6-38.9c-8.1 6.3-18.3 10.1-29.4 10.1-4.4 0-8.7-.6-12.7-1.7z"/>
                    <path d="M117 217c26.5 0 48 21.5 48 48 0 2.1-.2 4.2-.4 6.2l60.1 33.6c8.3-6.8 18.8-10.8 30.4-10.8 3.6 0 7.1.4 10.4 1.1l87.4-135.4c-5.6-7.8-8.9-17.4-8.9-27.8 0-26.5 21.5-48 48-48s48 21.5 48 48c0 3.9-.5 7.7-1.3 11.3l41.3 27.6V90.7c0-23.5-19.2-42.7-42.7-42.7H74.7C51.2 48 32 67.2 32 90.7V320l40-38.3c-1.9-5.2-3-10.8-3-16.7 0-26.5 21.5-48 48-48z"/>
                </svg>
            </a><!--end MetricaAnalytic-->

            <a href="#ManageUsers" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="ManageUsers">
                <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M239.208 343.937c-17.78 10.103-38.342 15.876-60.255 15.876-21.909 0-42.467-5.771-60.246-15.87C71.544 358.331 42.643 406 32 448h293.912c-10.639-42-39.537-89.683-86.704-104.063zM178.953 120.035c-58.479 0-105.886 47.394-105.886 105.858 0 58.464 47.407 105.857 105.886 105.857s105.886-47.394 105.886-105.857c0-58.464-47.408-105.858-105.886-105.858zm0 186.488c-33.671 0-62.445-22.513-73.997-50.523H252.95c-11.554 28.011-40.326 50.523-73.997 50.523z"/><g><path d="M322.602 384H480c-10.638-42-39.537-81.691-86.703-96.072-17.781 10.104-38.343 15.873-60.256 15.873-14.823 0-29.024-2.654-42.168-7.49-7.445 12.47-16.927 25.592-27.974 34.906C289.245 341.354 309.146 364 322.602 384zM306.545 200h100.493c-11.554 28-40.327 50.293-73.997 50.293-8.875 0-17.404-1.692-25.375-4.51a128.411 128.411 0 0 1-6.52 25.118c10.066 3.174 20.779 4.862 31.895 4.862 58.479 0 105.886-47.41 105.886-105.872 0-58.465-47.407-105.866-105.886-105.866-37.49 0-70.427 19.703-89.243 49.09C275.607 131.383 298.961 163 306.545 200z"/></g></svg>
            </a><!--end MetricaUsers-->

            <a href="#ManageProfiles" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="ManageProfiles">
                <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 256c52.805 0 96-43.201 96-96s-43.195-96-96-96-96 43.201-96 96 43.195 96 96 96zm0 48c-63.598 0-192 32.402-192 96v48h384v-48c0-63.598-128.402-96-192-96z"/></svg>
            </a><!--end MetricaProfiles-->

            <?php if ($_SESSION['user'][0]->user_type == 1) { ?>

            <a href="#SiteSetting" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="SiteSetting">
                <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M413.967 276.8c1.06-6.235 1.06-13.518 1.06-20.8s-1.06-13.518-1.06-20.8l44.667-34.318c4.26-3.118 5.319-8.317 2.13-13.518L418.215 115.6c-2.129-4.164-8.507-6.235-12.767-4.164l-53.186 20.801c-10.638-8.318-23.394-15.601-36.16-20.801l-7.448-55.117c-1.06-4.154-5.319-8.318-10.638-8.318h-85.098c-5.318 0-9.577 4.164-10.637 8.318l-8.508 55.117c-12.767 5.2-24.464 12.482-36.171 20.801l-53.186-20.801c-5.319-2.071-10.638 0-12.767 4.164L49.1 187.365c-2.119 4.153-1.061 10.399 2.129 13.518L96.97 235.2c0 7.282-1.06 13.518-1.06 20.8s1.06 13.518 1.06 20.8l-44.668 34.318c-4.26 3.118-5.318 8.317-2.13 13.518L92.721 396.4c2.13 4.164 8.508 6.235 12.767 4.164l53.187-20.801c10.637 8.318 23.394 15.601 36.16 20.801l8.508 55.117c1.069 5.2 5.318 8.318 10.637 8.318h85.098c5.319 0 9.578-4.164 10.638-8.318l8.518-55.117c12.757-5.2 24.464-12.482 36.16-20.801l53.187 20.801c5.318 2.071 10.637 0 12.767-4.164l42.549-71.765c2.129-4.153 1.06-10.399-2.13-13.518l-46.8-34.317zm-158.499 52c-41.489 0-74.46-32.235-74.46-72.8s32.971-72.8 74.46-72.8 74.461 32.235 74.461 72.8-32.972 72.8-74.461 72.8z"/></svg>
            </a><!--end MetricaSetting-->

            <a href="#Advance" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Advance">
                <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M96 176h80V96H96v80zm120 240h80v-80h-80v80zm-120 0h80v-80H96v80zm0-120h80v-80H96v80zm120 0h80v-80h-80v80zM336 96v80h80V96h-80zm-120 80h80V96h-80v80zm120 120h80v-80h-80v80zm0 120h80v-80h-80v80z"/>
                </svg>
            </a><!--end MetricaAdvance-->
        <?php }?>
        </nav><!--end nav-->
    </div><!--end main-icon-menu-->

    <div class="main-menu-inner">
        <div class="menu-body slimscroll">
            <div id="MetricaAnalytic" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Analytics</h6>       
                </div>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>Admin"><i class="dripicons-meter"></i>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link " href="#"><i class="dripicons-user-group"></i>Live Users</a></li>
                </ul>
            </div><!-- end Analytic -->

            <div id="ManageUsers" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Manage Users</h6>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link active" href="<?php echo base_url(); ?>Admin_Users"><i class="dripicons-user"></i>Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="dripicons-user-id"></i>Vendors</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>Admin_Employees"><i class="dripicons-user-id"></i>Employees</a></li>
                </ul>
            </div><!-- end ManageUsers -->

            <div id="ManageProfiles" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Manage featured Profiles</h6>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="dripicons-user"></i>Featured Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="dripicons-user-id"></i>Featured Vendors</a></li>
                </ul>
            </div><!-- end ManageProfiles -->

            <?php if ($_SESSION['user'][0]->user_type == 1) { ?>
            <div id="SiteSetting" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Site Setting</h6>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="dripicons-code"></i>Footer</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="dripicons-code"></i>Header</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>Admin_logo"><i class="dripicons-photo"></i>Logo</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>Admin_Contact"><i class="dripicons-phone"></i>Contact Information</a></li>
                </ul>
            </div><!-- end SiteSettings -->


            <div id="Advance" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Advance</h6>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="dripicons-blog"></i>Enquiries</a></li>
                </ul>
            </div><!-- end Advance -->    
        <?php } ?>

        </div><!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>