    <html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/intl-tel-input-master/build/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

    <style type="text/css">
        body {
            font-family: 'Varela Round', sans-serif;
        }

        @media only screen and (min-width: 360px) {
            .modal-login {
                margin: auto;
            }
        }

        .modal-login {
            color: #636363;
            width: 350px;
            margin-top: 100px;
        }

        .modal-login .modal-content {
            padding: 20px;
            border-radius: 5px;
            border: none;

        }

        .modal-login .modal-header {
            border-bottom: none;
            position: relative;
            justify-content: center;
        }

        .modal-login h4 {
            text-align: center;
            font-size: 26px;
        }

        .modal-login .form-group {
            position: relative;
        }

        .modal-login i {
            position: relative;
            left: 13px;
            top: 11px;
            font-size: 18px;
        }

        .modal-login .form-control {
            padding-left: 40px;
        }

        .modal-login .form-control:focus {
            border-color: #00ce81;
        }

        .modal-login .form-control,
        .modal-login .btn {
            min-height: 40px;
            border-radius: 3px;
        }

        .modal-login .hint-text {
            text-align: center;
            padding-top: 10px;
        }

        .modal-login .close {
            position: absolute;
            top: -5px;
            right: -55px;
        }

        .modal-login .btn {
            background: #00ce81;
            border: none;
            line-height: normal;
        }

        .modal-login .btn:hover,
        .modal-login .btn:focus {
            background: #00bf78;
        }

        .modal-login .modal-footer {
            background: #ecf0f1;
            border-color: #dee4e7;
            text-align: center;
            margin: 0 -20px -20px;
            border-radius: 5px;
            font-size: 13px;
            justify-content: center;
        }

        .modal-login .modal-footer a {
            color: #999;
        }
    </style>
</head>

<body>

<!--         <audio src="images/004001.wma" id="my_audio" loop="loop"></audio>
    <script type="text/javascript">
      window.onload=function(){
        document.getElementById("my_audio").play();
      }
    </script>
    <embed name="lostmojo" src="images/004001.wma" width="150" height="90" loop="false" autostart="false">
    <iframe src="images/004001.wma" allow="autoplay" id="audio" style="display:none"></iframe> -->
<header class="site-navbar mt-3">

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                <div class="ml-auto">
                    <button class="svg" data-toggle="modal" id="loginmodal">Login</button>
                    <button type="button" class="svg" data-toggle="popover" title="Modal Short Text"
                            data-content="You gotta go through it to see there ain't nothing to it. Listen to the silence.">Contact
                        Us</button>
                </div>

            </div>
        </div>
    </div>

</header>

<div class="s013">

    <div class="crossfade">
        <figure></figure>
        <figure id="particles-js1"></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <div class="text-block" id="particles-js">

        </div>
    </div>





    <?php $this->load->helper('form'); ?>
    <?php echo form_open('Registration'); ?>

    <div class="inner-form">
        <div class="left">
            <div class="input-wrap second">
                <div class="input-field second">
                    <label>Matrimony Profile for</label>
                    <div class="input-select">
                        <select  data-trigger="" name="profile-for"  >
                            <option  placeholder="">Select Profile</option>
                            <option>Myself</option>
                            <option>Daughter</option>
                            <option>Son</option>
                            <option>Sister</option>
                            <option>Brother</option>
                            <option>Relative</option>
                        </select>
                    </div>

                </div>
            </div>
            <div class="input-wrap second">
                <div class="input-field second">
                    <label>Name</label>
                    <input type="text" placeholder="Enter Name" required>
                </div>
            </div>
            <div class="input-wrap third">
                <div class="input-field third ">
                    <label>Mobile Number</label>
                    <input type="text" id="phone" placeholder="Enter Mobile Number" required>
                </div>
            </div>
            <button class="btn-warning btn-search " type="submit">Register Now</button>
        </div>


    </div>
</div>
</form>

<?php
    if(isset($_SESSION['register'])){
        if($_SESSION['register']==1){
            echo "<script>$.confirm({
                                        title: 'Congratulations!',
                                        content: 'Registration completed successfully. Download Your Pofile in PDF by clicking button below',
                                        type: 'green',
                                        typeAnimated: true,
                                        buttons: {
                                            tryAgain: {
                                                text: 'Download',
                                                btnClass: 'btn-green',
                                                action: function(){
                                                    location.href = '".base_url()."Registration/convertpdf'    
                                                }
                                            },
                                            close: function () {
                                            }
                                        }
                                    });</script>";
        }
        unset($_SESSION['register']);
    }
    if(isset($_SESSION['error'])){
        if($_SESSION['error']==1){
            echo "<script>$.confirm({
                                        title: 'Encountered an error!',
                                        content: 'Something went downhill, this may be serious',
                                        type: 'red',
                                        typeAnimated: true,
                                        buttons: {
                                            tryAgain: {
                                                text: 'Try again',
                                                btnClass: 'btn-red',
                                                action: function(){
                                                }
                                            },
                                            close: function () {
                                            }
                                        }
                                    });</script>";
        }
        unset($_SESSION['error']);
    }
?>
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Member Login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/examples/actions/confirmation.php" method="post">
                    <div class="form-group">
                        <i class="fa fa-user"></i>
                        <input type="text" class="form-control" placeholder="Username or Email" required="required">
                    </div>
                    <div class="form-group">
                        <i class="fa fa-lock"></i>
                        <input type="password" class="form-control" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
<button id="playpausebtn"></button>


<!--       <div class='footer'>
      <p>
          Copyright &copy;
          <script>document.write(new Date().getFullYear());</script> All rights reserved
        </p>
  </div>
</div> -->
<script src="<?php echo base_url(); ?>assets/particles.js-master/particles.js"></script>
<script src="<?php echo base_url(); ?>assets/particles.js-master/particles2.js"></script>
<script src="<?php echo base_url(); ?>assets/particles.js-master/demo/js/app.js"></script>


<script src="<?php echo base_url(); ?>assets/js/extention/choices.js"></script>
<script>
    const choices = new Choices('[data-trigger]',
        {
            searchEnabled: false,
            itemSelectText: '',

        });
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover({
            placement: 'bottom',
            trigger: 'hover'
        });
        $('#loginmodal').click(function () {
            $('#myModal').modal('show');
        });
    });

</script>
<script src="<?php echo base_url(); ?>assets/intl-tel-input-master/build/js/intlTelInput.js"></script>
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
        utilsScript: "<?php echo base_url(); ?>assets/intl-tel-input-master/build/js/utils.js",
    });
</script>
<!--    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8">
          <h2 class="text-white">Looking For A Job?</h2>
          <p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci
            impedit.</p>
        </div>
        <div class="col-md-3 ml-auto">
          <a href="#" class="btn btn-warning btn-block btn-lg">Sign Up</a>
        </div>
      </div>
    </div>
  </section> -->
</body>
<!--  <script>
    //Array of images which you want to show: Use path you want.
    var images=new Array('images/s3.jpg','images/s1.jpg','images/s2.jpg');
    var nextimage=0;
    doSlideshow();

    function doSlideshow(){
        if(nextimage>=images.length){nextimage=0;}
        $('.s013')
        .css('background-image','url("'+images[nextimage++]+'")')
        .fadeIn(900,function(){
            setTimeout(doSlideshow,3000);
        });
    }
    </script> -->

<script>
    var audio, playbtn,  seek_bar;
    function initAudioPlayer() {
        audio = new Audio();
        audio.src = "<?php echo base_url(); ?>assets/images/004001.wma";
        audio.loop = true;
        audio.play();
        // Set object references
        playbtn = document.getElementById("playpausebtn");
        if(audio.paused){
            playbtn.style.background = "url(<?php echo base_url(); ?>assets/images/play.png) no-repeat";
        }

        // Add Event Handling
        playbtn.addEventListener("click", playPause);

        // Functions
        function playPause() {
            if (audio.paused) {
                audio.play();
                playbtn.style.background = "url(<?php echo base_url(); ?>assets/images/pause.png) no-repeat";
            } else {
                audio.pause();
                playbtn.style.background = "url(<?php echo base_url(); ?>assets/images/play.png) no-repeat";
            }
        }
    }
    window.addEventListener("load", initAudioPlayer);

</script>
<!-- <script>
  var pause = document.querySelector('.pause');
  var play = document.querySelector('.play');
  var btn = document.querySelector('#app');

  btn.addEventListener('click', () => {
    if (play.classList.contains("active")) {
      play.classList.remove("active");
      pause.classList.add("active");
    }
    else {
      pause.classList.remove("active");
      play.classList.add("active");
    }
  })
</script> -->
</html>
