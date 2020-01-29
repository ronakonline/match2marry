<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registration</title>
    <!--alertify-->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

    <!--alertify-->
    <!-- Icons font CSS-->
    <link href="<?php echo base_url(); ?>/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url(); ?>/assets/css/main2.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/assets/css/main1.css" rel="stylesheet" media="all"> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/wtf-forms.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/intl-tel-input-master/build/css/intlTelInput.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/registration.js"></script>
    <script type="text/javascript">

    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .select2-default {
            color: #999 !important;
            width: auto !important;
        }
    </style>
</head>

<body>
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
            <!--   <button class="svg">Login</button> -->
           
      
                <button type="button" class="svg" data-toggle="popover" title="Modal Short Text" data-content="You gotta go through it to see there ain't nothing to it. Listen to the silence.">Contact Us</button>
          </div>

        </div>
      </div>
    </div>
    </header>
        
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <br><br>
                    <h2 class="title" id="title">Registration</h2>
                    <?php echo form_open_multipart('Registration/register'); ?>
<!--                    <form enctype="multipart/form-data" method="POST" id="regForm" action="Registration/register" >-->
                       
                                    <div class="tab">
                                   
                                         <div class="input-group">
                                            <input class="input--style-2" type="text" placeholder="Full Name" id="fname" name="fullname" >
                                        </div>
                                   

                         
                                        <div class="input-group">
                                            <input class="input--style-2" type="email" placeholder="Email" id="email" name="email" >
                                        </div>
                              
                        
                                
                                        <div class="input-group">
                                            <input class="input--style-2" type="Password" placeholder="Password" id="password" name="password">
                                        </div>
                                   
                                    
                                        <div class="input-group">
                                            <input class="input--style-2" type="Password" placeholder="Confirm Password" id="cpassword" name="cpassword">
                                        </div>
                                        
                                        <label class="control checkbox chklabel" id="agreeL">
                                        <input type="checkbox" id="iagree">
                                        <span class="control-indicator"></span>
                                        I Agree Terms & Coditions
                                        </label>
                                     </div>
                                    <div class="tab">
                                        
                                        <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <input class="input--style-2 js-datepicker" type="text" placeholder="Date of Birth" id="dob" name="dob">
                                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select  id="gender" name="gender">
                                                            <option disabled="disabled" selected="selected" value="Gender">Gender <sup>*</sup></option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                          <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="ncountry" id="nc">
                                                            <option disabled="disabled" selected="selected" value="nc">Native Country <sup>*</sup></option>
															<option value="1">United States</option>
                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="rcountry" id="cc">
                                                            <option disabled="disabled" selected="selected" value="cc">Residence Country <sup>*</sup></option>
															<option value="1">United States</option>
                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                             <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="nstate" id="ns">
                                                            <option disabled="disabled" selected="selected" value="ns">Native State <sup>*</sup></option>
															<?php
															foreach($result as $r){
																echo ' <option value="'.$r->id.'" >'.$r->name.'</option>';
															}
															?>
                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="cstate" id="cs">
                                                            <option disabled="disabled" selected="selected" value="cs">Residence State <sup>*</sup></option>
															<?php
															foreach($result as $r){
																echo ' <option value="'.$r->id.'" >'.$r->name.'</option>';
															}
															?>
                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>

                                             <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="ncity" id="nci">
                                                            <option disabled="disabled" selected="selected" value="nci">Native City <sup>*</sup></option>

                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="ccity" id="cci">
                                                            <option disabled="disabled" selected="selected" value="cci">Residence City <sup>*</sup></option>

                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="tab">



                                          <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="ms" id="ms">
                                                            <option disabled="disabled" selected="selected" value="ms">Marital Status</option>
                                                            <option value="Unmarried">Unmarried</option>
                                                            <option value="Divorced">Divorced</option>
                                                            <option value="Widow">Widow</option>
                                                            <option value="Widower">Widower</option>

                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="child" id="child">
                                                            <option disabled="disabled" selected="selected" value="child">Children</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                             <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="height" id="height">
                                                            <option disabled="disabled" selected="selected" value-="0">Height (Feet)</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="inch" id="inch">
                                                            <option disabled="disabled" selected="selected" value="none">Inch</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>

                                             <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="btype" id="btype">
                                                            <option disabled="disabled" selected="selected" value="0">Physique</option>
                                                            <option value="Slim">Slim</option>
                                                          <option value="Athletic">Athletic</option>
                                                          <option value="Build Muscular">Build Muscular</option>
                                                          <option value="Slight over weight">Slight over weight</option>
                                                          <option value="Moderate over weight">Moderate over weight</option>
                                                          <option value="Heavy over weight">Heavy over weight</option>
                                                       </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="health" id="htype">
                                                            <option disabled="disabled" selected="selected" value="0">Health</option>
                                                            <option value="Healthy">Healthy</option>
                                                          <option value="Physically challenged">Physically challenged</option>
                                                          <option value="Minor health issue">Minor health issue</option>
                                                       </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>

                                           <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="wol" id="wol">
                                                            <option disabled="disabled" selected="selected" value="0">Way of Living</option>
                                                            <option value="">Any</option>
                                                          <option value="Simple">Simple</option>
                                                          <option value="Moderate">Moderate</option>
                                                          <option value="Luxury">Luxury</option>
                                                          <option value="Balance as per convenience">Balance as per convenience</option>
                                                       </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="ft" id="ft">
                                                            <option disabled="disabled" selected="selected" value="0">Family/Tribe </option>
                                                            <option value="Ansari">Ansari</option>
                                                             <option value="Baig">Baig</option>
                                                                <option value="Ghori">Ghori</option>
                                                                <option value="Khan">Khan</option>
                                                                <option value="Mir">Mir</option>
                                                                <option value="Moghal">Moghal</option>
                                                                <option value="Qureshi">Qureshi</option>
                                                                <option value="Shaik">Shaik</option>
                                                                <option value="Syed">Syed</option>
                                                                </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                           <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="rp" id="rp">
                                                            <option disabled="disabled" selected="selected" value="0">Religious Practice</option>
                                                              <option value="Salah">Salah</option>
                                                               <option value="Soum">Soum</option>
                                                               <option value="Hajj">Hajj</option>
                                                               <option value="Zakat">Zakat</option>
                                                                <option value="Reading and Understanding Quran">Reading and Understanding Quran</option>
                                                                <option value="Dawah">Dawah</option>
                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="fiqhs" id="fiqhs">
                                                            <option disabled="disabled" selected="selected" value="0">Fiqh/School of Thought  </option>
                                                            <option value="Hanafi">Hanafi</option>
                                                            <option value="Shafai">Shafai</option>
                                                            <option value="Hanbali">Hanbali</option>
                                                            <option value="Maliki">Maliki</option>
                                                                </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                               <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="wywm" id="wywm">
                                                            <option disabled="disabled" selected="selected" value="0">When you want to Marry </option>
                                                                <option value="As soon as possible">As soon as possible </option>
                                             <option value="Within 1-2 months">Within 1-2 months</option>
                                             <option value="Within 3-4 months">Within 3-4 months</option>
                                             <option value="Within 5-6 months">Within 5-6 months</option>
                                             <option value="Within 6-7 months">Within 7-9 months</option>
                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="nationality" id="nationality">
                                                            <option disabled="disabled" selected="selected" value="0">Nationality</option>
                                                             <option value="Australian">Australian</option>
                                                           <option value="Bahraini">Bahraini</option>
                                                         <option value="Bangladeshi">Bangladeshi</option>
                                                     <option value="Canadian">Canadian</option>
                                                     <option value="Egyptian">Egyptian</option>
                                                    <option value="German">German</option>
                                                    <option value="Indian">Indian</option>
                                                <option value="Indonesian">Indonesian</option>
                                                         <option value="Jordanian">Jordanian</option>
                                                           <option value="Kuwaiti">Kuwaiti</option>
                                                            <option value="Lebanese">Lebanese</option>
                                                            <option value="Libyan">Libyan</option>
                                                             <option value="Malaysian">Malaysian</option>
                                                             <option value="Maldivian">Maldivian</option>
                                                             <option value="Mauritian">Mauritian</option>
                                                         <option value="Nepalese">Nepalese</option>
                                                           <option value="Omani">Omani</option>
                                                         <option value="Pakistani">Pakistani</option>
                                                        <option value="Qatari">Qatari</option>
                                                      <option value="Saudi">Saudi</option>
                                                    <option value="South African">South African</option>
                                             <option value="Sri Lankan">Sri Lankan</option>
                                                       <option value="Sudanese">Sudanese</option>
                                                          <option value="Emirati">Emirati</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                 <option value="American">American</option>
                                                          <option value="Yemeni">Yemeni</option>
                                                    <option value="Chinese">Chinese</option>
                                               <option value="Moroccan">Moroccan</option>
                                                <option value="filipino">filipino</option>
                                                     <option value="Turkish">Turkish</option>
                                                      <option value="Kiwis">Kiwis</option>
                                                                     </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="tab">
                                          <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="edu" id="edu">
                                                            <option disabled="disabled" value="0" selected="selected">Education</option>
                                                            <option value="Graduate">Graduate</option>
                                                             <option value="B.Tech">B.Tech</option>
                                                            <option value="Post graduate">Post graduate</option>
                                                            <option value="M.Tech">M.Tech</option>
                                                            <option value="B.Ed">B.Ed</option>
                                                             <option value="B.Pharm">B.Pharm</option>
                                                           <option value="M.Pharm">M.Pharm</option>
                                                          <option value="MBA">MBA</option>
                                                             <option value="MCA">MCA</option>
                                                           <option value="Doctorate">Doctorate</option>
                                                              <option value="M.Phil">M.Phil</option>
                                                           <option value="Islamic Mufti">Islamic Mufti</option>
                                                           <option value="Islamic Alim">Islamic Alim</option>
                                                            <option value="Islamic Fazil">Islamic Fazil</option>
                                                             <option value="Islamic Hafiz e Quran">Islamic Hafiz e Quran</option>
                                                             <option value="Others">Others</option>
                                                         </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="wp" id="wp">
                                                            <option disabled="disabled" value="0" selected="selected">Work Profession </option>

                                                  <option value="Architect">Architect</option>
                                                  <option value="Engineer">Engineer</option>
                                                  <option value="Doctor">Doctor</option>
                                                  <option value="Defence">Defence</option>
                                                  <option value="Finance">Finance</option>
                                                  <option value="IT">IT</option>
                                                  <option value="Human Resource">Human Resource</option>
                                                  <option value="Business">Business</option>
                                                  <option value="Office administration">Office administration</option>
                                                  <option value="Professor">Professor</option>
                                                  <option value="Teacher">Teacher</option>
                                                  <option value="Writer">Writer</option>
                                                  <option value="Medical">Medical</option>
                                                  <option value="Sales">Sales</option>
                                                  <option value="Scientist">Scientist</option>
                                                  <option value="Judge">Judge</option>
                                                  <option value="Job holder">Job holder</option>
                                                  <option value="Politician">Politician</option>
                                                  <option value="Proprietor">Proprietor</option>
                                                  <option value="Safety/Security">Safety/Security</option>
                                                  <option value="Vehicle Driving">Vehicle Driving</option>
                                                  <option value="Attorney at law/Advocates/Solicitors">Attorney at law/Advocates/Solicitors</option>
                                                  <option value="Islamic Imam">Islamic Imam</option>
                                                  <option value="Islamic Muezzin">Islamic Muezzin</option>
                                                  <option value="Islamic Dayee">Islamic Dayee</option>
                                                  <option value="Prefer to work after marriage">Prefer to work after marriage</option>
                                                  <option value="Not Working">Not Working</option>
                                                  <option value="Government job">Government job</option>
                                                  <option value="Nurse">Nurse</option>
                                           </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                             <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="nl" id="nl">
                                                            <option value="0" disabled="disabled" selected="selected">Native Language </option>
                                                             <option value="Arabic">Arabic</option>
                                                              <option value="Bengali">Bengali</option>
                                                              <option value="Bhojpuri">Bhojpuri</option>
                                                              <option value="English">English</option>
                                                              <option value="French">French</option>
                                                              <option value="Gujrati">Gujrati</option>
                                                              <option value="Hindi">Hindi</option>
                                                              <option value="Indonesian">Indonesian</option>
                                                              <option value="Kannada">Kannada</option>
                                                              <option value="Kashmiri">Kashmiri</option>
                                                              <option value="Marathi">Marathi</option>
                                                              <option value="Malayalam">Malayalam</option>
                                                              <option value="Panjabi">Panjabi</option>
                                                              <option value="Russian">Russian</option>
                                                              <option value="Spanish">Spanish</option>
                                                              <option value="Tamil">Tamil</option>
                                                              <option value="Telugu">Telugu</option>
                                                              <option value="Urdu">Urdu</option>
                                                              <option value="Chinese">Chinese</option>
                                                              <option value="Turkish">Turkish</option>
                                                              <option value="Filipino">Filipino</option>
                                           </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple ">
                                                        <select name="lk[]" id="lk" multiple="multiple">

                                                             <option value="Arabic">Arabic</option>
                                                              <option value="Bengali">Bengali</option>
                                                              <option value="Bhojpuri">Bhojpuri</option>
                                                              <option value="English">English</option>
                                                              <option value="French">French</option>
                                                              <option value="Gujrati">Gujrati</option>
                                                              <option value="Hindi">Hindi</option>
                                                              <option value="Indonesian">Indonesian</option>
                                                              <option value="Kannada">Kannada</option>
                                                              <option value="Kashmiri">Kashmiri</option>
                                                              <option value="Marathi">Marathi</option>
                                                              <option value="Malayalam">Malayalam</option>
                                                              <option value="Panjabi">Panjabi</option>
                                                              <option value="Russian">Russian</option>
                                                              <option value="Spanish">Spanish</option>
                                                              <option value="Tamil">Tamil</option>
                                                              <option value="Telugu">Telugu</option>
                                                              <option value="Urdu">Urdu</option>
                                                              <option value="Chinese">Chinese</option>
                                                              <option value="Turkish">Turkish</option>
                                                              <option value="Filipino">Filipino</option>
                                                           </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>

                                             <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="ec" id="ec">
                                                            <option disabled="disabled" value="0" selected="selected">Earning currency </option>
                                                             <option value="Australia Dollar">Australia Dollar</option>
                                              <option value="Bahrain Dinar">Bahrain Dinar</option>
                                              <option value="Bangladesh Taka">Bangladesh Taka</option>
                                              <option value="Canada Dollar">Canada Dollar</option>
                                              <option value="Egypt Pound">Egypt Pound</option>
                                              <option value="Germany Euro">Germany Euro</option>
                                              <option value="INR">INR</option>
                                              <option value="Indonesia Rupiah">Indonesia Rupiah</option>
                                              <option value="Jordan Dinar">Jordan Dinar</option>
                                              <option value="Kuwait Dinar">Kuwait Dinar</option>
                                              <option value="Lebnan Pound">Lebnan Pound</option>
                                              <option value="Libya Dinar">Libya Dinar</option>
                                              <option value="Malaysia Ringgit">Malaysia Ringgit</option>
                                              <option value="Maldives Rufiyaa">Maldives Rufiyaa</option>
                                              <option value="Mauritian Rupee">Mauritian Rupee</option>
                                              <option value="Nepalese Rupee">Nepalese Rupee</option>
                                              <option value="Oman Riyal">Oman Riyal</option>
                                              <option value="Pakistan Rupee">Pakistan Rupee</option>
                                              <option value="Qatar Riyal">Qatar Riyal</option>
                                              <option value="KSA Riyal">KSA Riyal</option>
                                              <option value="South Africa Rand">South Africa Rand</option>
                                              <option value="Sri Lanka Rupee">Sri Lanka Rupee</option>
                                              <option value="Sudan Pound">Sudan Pound</option>
                                              <option value="UAE Dirham">UAE Dirham</option>
                                              <option value="UK Pound">UK Pound</option>
                                              <option value="USA Dollar">USA Dollar</option>
                                              <option value="Yemen Riyal">Yemen Riyal</option>
                                                    </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                 <div class="input-group">
                                            <input class="input--style-2" type="tel" placeholder="Monthly Salary " name="msa" id="msa">
                                        </div>
                                            </div>
                                          </div>


                                    </div>
                                    <div class="tab">
                                    <div class="row row-space">
                                            <div class="col-2">
                                                 <div class="input-group">
                                                         <input class="input--style-2" id="gname" type="tel" placeholder="Father/Guardian name " name="gname">
                                                 </div>
                                            </div>
                                             <div class="col-2">
                                                 <div class="input-group">
                                                         <input class="input--style-2" type="tel" id="gphone" placeholder="Father/Guardian contact number " name="gphone">
                                                 </div>
                                            </div>
                                    </div>
                                    <div class="row row-space">
                                            <div class="col-2">

                                                    <label class="file">
                                                    <input type="file" name="profilephoto" id="profilephoto" aria-label="File browser example">
                                                    <span class="file-custom">Profile Photo</span>
                                                    </label>

                                            </div>
                                             <div class="col-2">

                                                    <label class="file">
                                                    <input type="file" name="ip" id="idproof" aria-label="File browser example">
                                                    <span class="file-custom">ID Proof</span>
                                                    </label>

                                            </div>
                                    </div>
                                           <div class="row row-space">
                                            <div class="col-2">

                                                    <label class="file">
                                                    <input type="file" name="biodata" id="biodata" aria-label="File browser example">
                                                    <span class="file-custom">Bio Data</span>
                                                    </label>

                                            </div>
                                             <div class="col-2">

                                                    <div class="input-group">
                                                         <input class="input--style-2" name="fbid" type="tel" placeholder="Facebook ID " >
                                                 </div>

                                            </div>
                                    </div>
                                </div>
                                    <div class="tab">
                                              <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Minimum Height (Feet)</option>

                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Inch</option>

                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                           <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Maximum Height (Feet)</option>

                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Inch</option>

                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                             <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Minimum Age</option>
                                                           <option value="18">18</option>
                                                             <option value="19">19</option>
                                                             <option value="20">20</option>
                                                             <option value="21">21</option>
                                                             <option value="22">22</option>
                                                             <option value="23">23</option>
                                                             <option value="24">24</option>
                                                             <option value="25">25</option>
                                                             <option value="26">26</option>
                                                             <option value="27">27</option>
                                                             <option value="28">28</option>
                                                             <option value="29">29</option>
                                                             <option value="30">30</option>
                                                             <option value="31">31</option>
                                                             <option value="32">32</option>
                                                             <option value="33">33</option>
                                                             <option value="34">34</option>
                                                             <option value="35">35</option>
                                                             <option value="36">36</option>
                                                             <option value="37">37</option>
                                                             <option value="38">38</option>
                                                             <option value="39">39</option>
                                                             <option value="40">40</option>
                                                             <option value="41">41</option>
                                                             <option value="42">42</option>
                                                             <option value="43">43</option>
                                                             <option value="44">44</option>
                                                             <option value="45">45</option>
                                                             <option value="46">46</option>
                                                             <option value="47">47</option>
                                                             <option value="48">48</option>
                                                             <option value="49">49</option>
                                                             <option value="50">50</option>
                                                             <option value="51">51</option>
                                                             <option value="52">52</option>
                                                             <option value="53">53</option>
                                                             <option value="54">54</option>
                                                             <option value="55">55</option>
                                                             <option value="56">56</option>
                                                             <option value="57">57</option>
                                                             <option value="58">58</option>
                                                             <option value="59">59</option>
                                                             <option value="60">60</option>
                                                             <option value="61">61</option>
                                                             <option value="62">62</option>
                                                             <option value="63">63</option>
                                                             <option value="64">64</option>
                                                             <option value="65">65</option>
                                                             <option value="66">66</option>
                                                             <option value="67">67</option>
                                                             <option value="68">68</option>
                                                             <option value="69">69</option>
                                                             <option value="70">70</option>
                                                          </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Maximum Age</option>
                                                            <option value="18">18</option>
                                                             <option value="19">19</option>
                                                             <option value="20">20</option>
                                                             <option value="21">21</option>
                                                             <option value="22">22</option>
                                                             <option value="23">23</option>
                                                             <option value="24">24</option>
                                                             <option value="25">25</option>
                                                             <option value="26">26</option>
                                                             <option value="27">27</option>
                                                             <option value="28">28</option>
                                                             <option value="29">29</option>
                                                             <option value="30">30</option>
                                                             <option value="31">31</option>
                                                             <option value="32">32</option>
                                                             <option value="33">33</option>
                                                             <option value="34">34</option>
                                                             <option value="35">35</option>
                                                             <option value="36">36</option>
                                                             <option value="37">37</option>
                                                             <option value="38">38</option>
                                                             <option value="39">39</option>
                                                             <option value="40">40</option>
                                                             <option value="41">41</option>
                                                             <option value="42">42</option>
                                                             <option value="43">43</option>
                                                             <option value="44">44</option>
                                                             <option value="45">45</option>
                                                             <option value="46">46</option>
                                                             <option value="47">47</option>
                                                             <option value="48">48</option>
                                                             <option value="49">49</option>
                                                             <option value="50">50</option>
                                                             <option value="51">51</option>
                                                             <option value="52">52</option>
                                                             <option value="53">53</option>
                                                             <option value="54">54</option>
                                                             <option value="55">55</option>
                                                             <option value="56">56</option>
                                                             <option value="57">57</option>
                                                             <option value="58">58</option>
                                                             <option value="59">59</option>
                                                             <option value="60">60</option>
                                                             <option value="61">61</option>
                                                             <option value="62">62</option>
                                                             <option value="63">63</option>
                                                             <option value="64">64</option>
                                                             <option value="65">65</option>
                                                             <option value="66">66</option>
                                                             <option value="67">67</option>
                                                             <option value="68">68</option>
                                                             <option value="69">69</option>
                                                             <option value="70">70</option>
                                                          </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                           <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Education</option>
                                                          <option value="Primary school">Primary school</option>
                                  <option value="Secondary school">Secondary school</option>
                                  <option value="Intermediate">Intermediate</option>
                                  <option value="Diploma">Diploma</option>
                                  <option value="Graduate">Graduate</option>
                                  <option value="B.Tech">B.Tech</option>
                                  <option value="Post graduate">Post graduate</option>
                                  <option value="M.Tech">M.Tech</option>
                                  <option value="B.Ed">B.Ed</option>
                                  <option value="B.Pharm">B.Pharm</option>
                                  <option value="M.Pharm">M.Pharm</option>
                                  <option value="MBA">MBA</option>
                                  <option value="MCA">MCA</option>
                                  <option value="Doctorate">Doctorate</option>
                                  <option value="M.Phil">M.Phil</option>
                                  <option value="Islamic Mufti">Islamic Mufti</option>
                                  <option value="Islamic Alim">Islamic Alim</option>
                                  <option value="Islamic Fazil">Islamic Fazil</option>
                                  <option value="Islamic Hafiz e Quran">Islamic Hafiz e Quran</option>
                                  <option value="Others">Others</option>
                               </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Work Profession </option>
                                                            <option value="Architect">Architect</option>
                                                          <option value="Engineer">Engineer</option>
                                                          <option value="Doctor">Doctor</option>
                                                          <option value="Defence">Defence</option>
                                                          <option value="Finance">Finance</option>
                                                          <option value="IT">IT</option>
                                                          <option value="Human Resource">Human Resource</option>
                                                          <option value="Business">Business</option>
                                                          <option value="Office administration">Office administration</option>
                                                          <option value="Professor">Professor</option>
                                                          <option value="Teacher">Teacher</option>
                                                          <option value="Writer">Writer</option>
                                                          <option value="Medical">Medical</option>
                                                          <option value="Sales">Sales</option>
                                                          <option value="Scientist">Scientist</option>
                                                          <option value="Judge">Judge</option>
                                                          <option value="Job holder">Job holder</option>
                                                          <option value="Politician">Politician</option>
                                                          <option value="Proprietor">Proprietor</option>
                                                          <option value="Safety/Security">Safety/Security</option>
                                                          <option value="Vehicle Driving">Vehicle Driving</option>
                                                          <option value="Attorney at law/Advocates/Solicitors">Attorney at law/Advocates/Solicitors</option>
                                                          <option value="Islamic Imam">Islamic Imam</option>
                                                          <option value="Islamic Muezzin">Islamic Muezzin</option>
                                                          <option value="Islamic Dayee">Islamic Dayee</option>
                                                          <option value="Prefer to work after marriage">Prefer to work after marriage</option>
                                                          <option value="Not Working">Not Working</option>
                                                          <option value="Government job">Government job</option>
                                                          <option value="Nurse">Nurse</option>
                                                       </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                           <div class="row row-space">
                                            <div class="col-3">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Earning currency </option>
                                                           <option value="Australia Dollar">Australia Dollar</option>
                                                  <option value="Bahrain Dinar">Bahrain Dinar</option>
                                                  <option value="Bangladesh Taka">Bangladesh Taka</option>
                                                  <option value="Canada Dollar">Canada Dollar</option>
                                                  <option value="Egypt Pound">Egypt Pound</option>
                                                  <option value="Germany Euro">Germany Euro</option>
                                                  <option value="INR">INR</option>
                                                  <option value="Indonesia Rupiah">Indonesia Rupiah</option>
                                                  <option value="Jordan Dinar">Jordan Dinar</option>
                                                  <option value="Kuwait Dinar">Kuwait Dinar</option>
                                                  <option value="Lebnan Pound">Lebnan Pound</option>
                                                  <option value="Libya Dinar">Libya Dinar</option>
                                                  <option value="Malaysia Ringgit">Malaysia Ringgit</option>
                                                  <option value="Maldives Rufiyaa">Maldives Rufiyaa</option>
                                                  <option value="Mauritian Rupee">Mauritian Rupee</option>
                                                  <option value="Nepalese Rupee">Nepalese Rupee</option>
                                                  <option value="Oman Riyal">Oman Riyal</option>
                                                  <option value="Pakistan Rupee">Pakistan Rupee</option>
                                                  <option value="Qatar Riyal">Qatar Riyal</option>
                                                  <option value="KSA Riyal">KSA Riyal</option>
                                                  <option value="South Africa Rand">South Africa Rand</option>
                                                  <option value="Sri Lanka Rupee">Sri Lanka Rupee</option>
                                                  <option value="Sudan Pound">Sudan Pound</option>
                                                  <option value="UAE Dirham">UAE Dirham</option>
                                                  <option value="UK Pound">UK Pound</option>
                                                  <option value="USA Dollar">USA Dollar</option>
                                                  <option value="Yemen Riyal">Yemen Riyal</option>
                                               </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="col-3">
                                                <div class="input-group">
                                                    <input class="input--style-2 " type="text" placeholder="Minimum  Salary" name="Date of Birth">

                                                </div>
                                            </div>
                                              <div class="col-3">
                                                <div class="input-group">
                                                    <input class="input--style-2 " type="text" placeholder="Maximum  Salary" name="Date of Birth">

                                                </div>
                                            </div>
                                          </div>
                                 </div>
                                    <div class="tab">
                                      <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Native Country </option>
                                                           <option value="3">Australia</option>
                                                          <option value="4">Bahrain</option>
                                                          <option value="17">Bangladesh </option>
                                                          <option value="5">Canada</option>
                                                          <option value="28">China</option>
                                                          <option value="18">Egypt</option>
                                                          <option value="6">Germany</option>
                                                          <option value="1">India</option>
                                                          <option value="7">Indonesia</option>
                                                          <option value="22">Jordan</option>
                                                          <option value="8">Kuwait </option>
                                                          <option value="19">Lebanon</option>
                                                          <option value="20">Libya</option>
                                                          <option value="9">Malaysia</option>
                                                          <option value="21">Maldives</option>
                                                          <option value="10">Mauritius</option>
                                                          <option value="29">Morocco</option>
                                                          <option value="23">Nepal</option>
                                                          <option value="31">Newzealand</option>
                                                          <option value="11">Oman</option>
                                                          <option value="12">Pakistan</option>
                                                          <option value="30">philippines</option>
                                                          <option value="13">Qatar</option>
                                                          <option value="2">Saudi Arabia</option>
                                                          <option value="27">South Africa</option>
                                                          <option value="24">Sri Lanka</option>
                                                          <option value="25">Sudan</option>
                                                          <option value="32">Turky</option>
                                                          <option value="14">United Arab Emirates</option>
                                                          <option value="15">United Kingdom</option>
                                                          <option value="16">United State of America</option>
                                                          <option value="26">Yemen</option>
                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Residence Country </option>
                                                            <option value="3">Australia</option>
                                                          <option value="4">Bahrain</option>
                                                          <option value="17">Bangladesh </option>
                                                          <option value="5">Canada</option>
                                                          <option value="28">China</option>
                                                          <option value="18">Egypt</option>
                                                          <option value="6">Germany</option>
                                                          <option value="1">India</option>
                                                          <option value="7">Indonesia</option>
                                                          <option value="22">Jordan</option>
                                                          <option value="8">Kuwait </option>
                                                          <option value="19">Lebanon</option>
                                                          <option value="20">Libya</option>
                                                          <option value="9">Malaysia</option>
                                                          <option value="21">Maldives</option>
                                                          <option value="10">Mauritius</option>
                                                          <option value="29">Morocco</option>
                                                          <option value="23">Nepal</option>
                                                          <option value="31">Newzealand</option>
                                                          <option value="11">Oman</option>
                                                          <option value="12">Pakistan</option>
                                                          <option value="30">philippines</option>
                                                          <option value="13">Qatar</option>
                                                          <option value="2">Saudi Arabia</option>
                                                          <option value="27">South Africa</option>
                                                          <option value="24">Sri Lanka</option>
                                                          <option value="25">Sudan</option>
                                                          <option value="32">Turky</option>
                                                          <option value="14">United Arab Emirates</option>
                                                          <option value="15">United Kingdom</option>
                                                          <option value="16">United State of America</option>
                                                          <option value="26">Yemen</option>
                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                           <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Native State</option>

                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Residence State</option>

                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>

                                             <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Native City</option>

                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Residence City</option>

                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>

                                           <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Physique</option>
                                                            <option value="Slim">Slim</option>
                                                          <option value="Athletic">Athletic</option>
                                                          <option value="Build Muscular">Build Muscular</option>
                                                          <option value="Slight over weight">Slight over weight</option>
                                                          <option value="Moderate over weight">Moderate over weight</option>
                                                          <option value="Heavy over weight">Heavy over weight</option>
                                                       </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Health</option>
                                                            <option value="Healthy">Healthy</option>
                                                          <option value="Physically challenged">Physically challenged</option>
                                                          <option value="Minor health issue">Minor health issue</option>
                                                       </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>

                                           <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Way of Living</option>
                                                            <option value="">Any</option>
                                                          <option value="Simple">Simple</option>
                                                          <option value="Moderate">Moderate</option>
                                                          <option value="Luxury">Luxury</option>
                                                          <option value="Balance as per convenience">Balance as per convenience</option>
                                                       </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Family/Tribe </option>
                                                            <option value="Ansari">Ansari</option>
                                                             <option value="Baig">Baig</option>
                                                                <option value="Ghori">Ghori</option>
                                                                <option value="Khan">Khan</option>
                                                                <option value="Mir">Mir</option>
                                                                <option value="Moghal">Moghal</option>
                                                                <option value="Qureshi">Qureshi</option>
                                                                <option value="Shaik">Shaik</option>
                                                                <option value="Syed">Syed</option>
                                                                </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                           <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Religious Practice</option>
                                                              <option value="Salah">Salah</option>
                                                               <option value="Soum">Soum</option>
                                                               <option value="Hajj">Hajj</option>
                                                               <option value="Zakat">Zakat</option>
                                                                <option value="Reading and Understanding Quran">Reading and Understanding Quran</option>
                                                                <option value="Dawah">Dawah</option>
                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="a">
                                                            <option disabled="disabled" selected="selected">Fiqh/School of Thought  </option>
                                                            <option value="Hanafi">Hanafi</option>
                                                            <option value="Shafai">Shafai</option>
                                                            <option value="Hanbali">Hanbali</option>
                                                            <option value="Maliki">Maliki</option>
                                                                </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                 </div>
                                 
                       
                      
                            <div class="pt-30" style="float:right;">
                                <button class="btn btn--radius btn--green" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button class="btn btn--radius btn--green" type="button" id="nextBtn" onclick="nextPrev(1)" hidden>Next</button>
                             </div>
                    </form>
                </div>
            </div>
      

    <!-- Jquery JS-->
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url(); ?>/assets/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url(); ?>/assets/js/global.js"></script>
    
    <script type="text/javascript">
       
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...

  var x = document.getElementsByClassName("tab");
  document.getElementsByClassName("card-heading")[0].style.background = 'url("<?php echo base_url(); ?>/assets/images/'+(n+2)+'.jpg") top left/cover no-repeat';

  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
    document.getElementById("title").innerHTML="Registration";
  }
  else if(n == 1){
    document.getElementById("prevBtn").style.display = "inline-block";
    document.getElementById("title").innerHTML="General Info";
  }
  else if(n == 2){
    document.getElementById("prevBtn").style.display = "inline";
    document.getElementById("title").innerHTML="Personal Info";
  }
  else if(n == 3){
    document.getElementById("prevBtn").style.display = "inline";
    document.getElementById("title").innerHTML="Career & Education";
  }
   else if(n == 4){
    document.getElementById("prevBtn").style.display = "inline";
    document.getElementById("title").innerHTML="User Info";
  }
   else if(n == 5){
    document.getElementById("prevBtn").style.display = "inline";
    document.getElementById("title").innerHTML="Partner Preferences";
  }

   else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
    //document.getElementById("nextBtn").setAttribute('type', 'submit');

  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }

  // ... and run a function that displays the correct step indicator:

}


</script>
<script src="<?php echo base_url(); ?>/assets/intl-tel-input-master/build/js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "<?php echo base_url(); ?>/assets/intl-tel-input-master/build/js/utils.js",
    });
  </script>
  <script>
        $(document).ready(function(){
        $('#nc').change(function(){
        var country_id = $('#nc').val();
        if(country_id != '')
        {
        $.ajax({
            url:"<?php echo base_url(); ?>registration/fetch_state",
            method:"POST",
            data:{country_id:country_id},
            success:function(data)
            {
            $('#ns').html(data);
            }
        });
        }
        else
        {
        $('#ns').html('<option value="ns">Native State</option>');
        $('#nci').html('<option value="nci">Native City</option>');
        }
        });

        $('#ns').change(function(){
        var state_id = $('#ns').val();
        if(state_id != '')
        {
        $.ajax({
            url:"<?php echo base_url(); ?>registration/fetch_city",
            method:"POST",
            data:{state_id:state_id,type:"ns"},
            success:function(data)
            {
            $('#nci').html(data);
            }
        });
        }
        else
        {
        $('#nci').html('<option value="nci">Native City</option>');
        }
        });
        
        });
</script>
<script>
        $(document).ready(function(){
        $('#cc').change(function(){
        var country_id = $('#cc').val();
        if(country_id != '')
        {
        $.ajax({
            url:"<?php echo base_url(); ?>registration/fetch_state",
            method:"POST",
            data:{country_id:country_id},
            success:function(data)
            {
            $('#cs').html(data);
            }
        });
        }
        else
        {
        $('#cs').html('<option value="">Residence State</option>');
        $('#cci').html('<option value="">Residence City</option>');
        }
        });

        $('#cs').change(function(){
        var state_id = $('#cs').val();
        if(state_id != '')
        {
        $.ajax({
            url:"<?php echo base_url(); ?>registration/fetch_city",
            method:"POST",
            data:{state_id:state_id,type:'cs'},
            success:function(data)
            {
            $('#cci').html(data);
            }
        });
        }
        else
        {
        $('#cci').html('<option value="cci">Residence City</option>');
        }
        });

        });
        $("#lk").select2({
            placeholder: 'Select an option'
        });
</script>
</body>

</html>
<!-- end document-->
