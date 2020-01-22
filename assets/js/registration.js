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

        if( dob.value.length==0 && gender.value=="Gender" && nc.value =="nc" && ns.value =="ns" && nci.value =="nci" && cc.value =="cc" && cs.value =="cs" && cci.value =="cci"){
            alertify.error('Fill All Fields');
        }
        else if( dob.value.length==0 || gender.value=="Gender" || nc.value =="nc" || ns.value =="ns" || nci.value =="nci" || cc.value =="cc" || cs.value =="cs" || cci.value =="cci"){

            if(dob.value.length==0)
                alertify.error('DOB Required');
            if(gender.value=="Gender"){
                alertify.error('Select Gender');}
            if(nc.value=="nc"){
                alertify.error('Select Native Country');}
            if(ns.value=="ns"){
                alertify.error('Select Native State');}
            if(nci.value=="nci"){
                alertify.error('Select Native City');}
            if(cc.value=="cc"){
                alertify.error('Select Current Country');}
            if(cs.value=="cs"){
                alertify.error('Select Current State');}
            if(cci.value=="cci"){
                alertify.error('Select Current City');}
        }else{
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            showTab(currentTab);

        }

    }else if(currentTab==2 && n==1){
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
        if(ms.value.length==0 || child.value.length==0 || height.value=="" || inch.value =="" || btype.value =="" || htype.value =="" || wol.value =="" || ft.value =="" || rp.value =="" || fiqhs.value==""){
        }
        else{
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;

            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                Swal.fire(
                    'Done!',
                    'Your Registration is successful!',
                    'success')
                setTimeout(function(){ if(currentTab==7){
                    window.location = "file:///D:/M/M-R/index.html";
                } }, 3000);

            }else{
                showTab(currentTab);
            }
            // Otherwise, display the correct tab:
        }
    } else{

        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;

        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            Swal.fire(
                'Done!',
                'Your Registration is successful!',
                'success')
            setTimeout(function(){ if(currentTab==7){
                window.location = "file:///D:/M/M-R/index.html";
            } }, 3000);

        }else{
            showTab(currentTab);
        }
        // Otherwise, display the correct tab:
    }


}