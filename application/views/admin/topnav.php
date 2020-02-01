<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="\light/analytics/analytics-index.php" class="logo">
            <!-- <span>
                <img src="../assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
            </span> -->
            <span>
                <img src="\light/assets/images/FinalLogo.png" alt="logo-large" class="logo-lg" style="height: 80px;">
            </span>
        </a>
    </div>
    <!--end logo-->
    <!-- Navbar -->
    <nav class="navbar-custom">    
        <ul class="list-unstyled topbar-nav float-right mb-0"> 
            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <img src="\light/assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle" /> 
                    <span class="ml-1 nav-user-name hidden-sm"><?php echo $_SESSION['user'][0]->Name; ?> <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="\light/profile.php"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                    <a class="dropdown-item" href="\light/lock-screen.php"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url();?>Admin_login/logout"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                </div>
            </li>
        </ul><!--end topbar-nav-->

        <ul class="list-unstyled topbar-nav mb-0">                        
            <li>
                <button class="button-menu-mobile nav-link waves-effect waves-light">
                    <i class="dripicons-menu nav-icon"></i>
                </button>
            </li>
        </ul>
    </nav>
    <!-- end navbar-->
</div>