var currentTab = 0; // Current tab is set to be the first tab (0)
function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");

    // Exit the function if any field in the current tab is invalid:
    if(currentTab==0 && n==1){

        //First slide validation

        fname = document.getElementById("fname");
        email = document.getElementById("email");
        pass = document.getElementById("password");
        cpass = document.getElementById("cpassword");
        agree = document.getElementById("iagree");
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if(fname.value.length==0 || email.value.length==0 || pass.value.length==0 || cpass.value.length==0 || cpass.value!=pass.value){
            if(fname.value.length==0)
                alertify.error('Full Name Required');
            if(email.value.length==0)
                alertify.error('Email Required');
            if(pass.value.length==0)
                alertify.error('Password Required');
            if(cpass.value.length==0){
                alertify.error('Confirm Password Required');}
            if(pass.value != cpass.value){
                // cpass.placeholder="Confirm Password (Password not Matched)";
                alertify.error('Both Password not matched.');
            }

        }else if(agree.checked==false){
            alertify.error('Agree to terms and Condition');
        }else if(!email.value.match(mailformat)){
            alertify.error('Invalid Email');}
        else {
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            //testing git
            showTab(currentTab);
            }
        }
    else if(currentTab==1 && n==1){

        dob = document.getElementById("dob");
        gender = document.getElementById("gender");
        nc = document.getElementById("nc");
        ns = document.getElementById("ns");
        nci = document.getElementById("nci");
        cc = document.getElementById("cc");
        cs = document.getElementById("cs");
        cci = document.getElementById("cci");

        if( dob.value.length==0 || gender.value=="Gender" || nc.value =="nc" || ns.value =="ns" || nci.value =="nci" || cc.value =="cc" || cs.value =="cs" || cci.value =="cci"){
            alertify.error('Fill All Fields');
        }
        else{
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            showTab(currentTab);

        }

    }
    else if(currentTab==2 && n==1){
        ms = document.getElementById("ms");
        child = document.getElementById("child");
        height = document.getElementById("height");
        inch = document.getElementById("inch");
        btype = document.getElementById("btype");
        htype = document.getElementById("htype");
        wol = document.getElementById("wol");
        ft = document.getElementById("ft");
        rp = document.getElementById("rp");
        fiqhs = document.getElementById("fiqhs");
        wym = document.getElementById("wym");
        nat = document.getElementById("nationality");
        if(ms.value=='ms' || child.value=="child" || height.value=="0" || inch.value =="none" || btype.value =="0" || htype.value =="0" || wol.value =="0" || ft.value =="0" || rp.value =="0" || fiqhs.value=="0" || ns.value=="0" || wywm.value=="0"){
            alertify.error('Fill All Fields');

        }
        else{
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            showTab(currentTab);

        }
    }
    else if(currentTab==3 && n==1){

                edu = document.getElementById("edu");
                wp = document.getElementById("wp");
                nl = document.getElementById("nl");
               // lk = document.getElementById("lk");
                ec = document.getElementById("ec");
                ms = document.getElementById("msa");
                if(edu.value==0 || wp.value==0 || nl.value==0 || ec.value==0 || ms.value.length==0){
                    alertify.error('Fill All Fields');

                }
                else if(isNaN(ms.value)){
                    alertify.error('Invalid Salary');
                }
                else{
                    // Hide the current tab:
                    x[currentTab].style.display = "none";
                    // Increase or decrease the current tab by 1:
                    currentTab = currentTab + n;
                    showTab(currentTab);

                }
     }
    else if(currentTab==4 && n==1){

            gname = document.getElementById("gname");
            gphone = document.getElementById("gphone");
            profilephoto = document.getElementById("profilephoto").files;
            idproof = document.getElementById("idproof").files;
            biodata = document.getElementById("biodata").files;
            if(gname.value.length==0 || gphone.value.length==0 || profilephoto.length==0 || idproof.length==0 || biodata.length==0){
                alertify.error('Fill All Fields');

            }
            else if(isNaN(gphone.value)){
                alertify.error('Invalid Phone Number');
            }
            else{
                // Hide the current tab:
                x[currentTab].style.display = "none";
                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
                showTab(currentTab);

            }
        }
    else if(currentTab == 6 && n==1){
        document.getElementById("nextBtn").setAttribute('type', 'submit');
    }
    else{
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        showTab(currentTab);
        // Otherwise, display the correct tab:
     }
}