$(document).ready(function(){

    //login form validation
    $("#loginform").submit(function(){
        var email = $("#email").val();
        var password = $("#password").val();

        var patemail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,6})+$/; // validation pattern mail   
        
        if((email=="")&&(password=="")){
            $("#alert").html("Email and Password cannot be empty !!!");
            $("#alert").addClass("alert alert-danger");
            return false;
        }
        if(email==""){
            $("#ealert").html("*Email Cannot be Empty!!!");
            $("#ealert").addClass("alert text-danger");
            $("#email").focus();
            return false;
        }
        if(!email.match(patemail)){
            $("#ealert").html("*Invalid Email!!!");
            $("#ealert").addClass("alert alert-danger");
            $("#email").focus();
            return false;
        }
        if(password==""){
            $("#palert").html("*Password Cannot be Empty!!!");
            $("#palert").addClass("alert text-danger");
            $("#password").focus();
            return false;
        }        
    })

    //login form validation remove
    $("#email,#password").keypress(function (){
        $("#alert").removeClass('alert').empty()
    })
    $("#email").keypress(function (){
        $("#ealert").removeClass('alert').empty()
    })
    $("#password").keypress(function (){
        $("#palert").removeClass('alert').empty()
    })

    //registration form validation
    $("#regform").submit(function(){

        var username =$('#username').val();
        var rpass=$('#rpass').val();
        var rpassword=$('#rpassword').val();

        var rpatemail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,6})+$/; // validation pattern mail   

        if(username==""){
            $("#ualert").html("*Username Cannot be Empty!!!");
            $("#ualert").addClass("alert text-danger");
            $("#username").focus();
            return false;
        }
        if(remail==""){
            $("#realert").html("*Email Cannot be Empty!!!");
            $("#realert").addClass("alert text-danger");
            $("#remail").focus();
            return false;
        }
        if(!remail.match(rpatemail)){
            $("#realert").html("*Invalid Email!!!");
            $("#realert").addClass("alert alert-danger");
            $("#remail").focus();
            return false;
        }
        if(rpass==""){
            $("#rpalert").html("*Password Cannot be Empty!!!");
            $("#rpalert").addClass("alert text-danger");
            $("#rpass").focus();
            return false;
        }
        if(rpassword==""){
            $("#rppalert").html("*Confirm Password!!!");
            $("#rppalert").addClass("alert text-danger");
            $("#rpassword").focus();
            return false;
        }
        if(rpass!=rpassword){
            $("#palert").html("*Password Mismatched. Please Try Again!!!");
            $("#palert").addClass("alert alert-danger");
            $("#rpass").focus();
            return false;
        }
    })
//registration form validation remove
        $("#username").keypress(function (){
            $("#ualert").removeClass('alert').empty()
        })
        $("#remail").keypress(function (){
            $("#realert").removeClass('alert').empty()
        })
        $("#rpass").keypress(function (){
            $("#rpalert").removeClass('alert').empty()
        })
        $("#rpassword").keypress(function (){
            $("#rppalert").removeClass('alert').empty()
        })

        //bank details form validation
    $("#validatebank").submit(function(){

        var bank_name =$('#bank_name').val();
        var branch_name=$('#branch_name').val();
        var branch_code=$('#branch_code').val();
        var account_number=$('#account_number').val();

        var patcode = /^([0-9]{3})$/; // validation pattern cno
        var patano = /^([0-9]{10}|[0-9]{11}|[0-9]{12}|[0-9]{13}|[0-9]{15}[0-9]{18})$/; // validation pattern cno


        if(bank_name==""){
            $("#bnalert").html("*Bank Name Cannot be Empty!!!");
            $("#bnalert").addClass("alert text-danger");
            $("#bank_name").focus();
            return false;
        }
        if(branch_name==""){
            $("#brnalert").html("*Bank Name Cannot be Empty!!!");
            $("#brnalert").addClass("alert text-danger");
            $("#branch_name").focus();
            return false;
        }
        if(branch_code==""){
            $("#brcalert").html("*Bank Name Cannot be Empty!!!");
            $("#brcalert").addClass("alert text-danger");
            $("#branch_code").focus();
            return false;
        }
        if(!branch_code.match(patcode)){
            $("#malert").html("*Invalid Brance Code!!!");
            $("#malert").addClass("alert alert-danger");
            $("#branch_code").focus();
            return false;
        }
        if(account_number==""){
            $("#analert").html("*Bank Name Cannot be Empty!!!");
            $("#analert").addClass("alert text-danger");
            $("#account_number").focus();
            return false;
        }
        if(!account_number.match(patano)){
            $("#malert").html("*Invalid Brance Code!!!");
            $("#malert").addClass("alert alert-danger");
            $("#account_number").focus();
            return false;
        }
        
    })
//bank details form validation remove
        $("#bank_name").keypress(function (){
            $("#bnalert").removeClass('alert').empty()
        })
        $("#branch_name").keypress(function (){
            $("#brnalert").removeClass('alert').empty()
        })
        $("#branch_code").keypress(function (){
            $("#brcalert").removeClass('alert').empty()
        })
        $("#account_number").keypress(function (){
            $("#analert").removeClass('alert').empty()
        })
    })