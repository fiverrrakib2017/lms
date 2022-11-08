<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Login Form</title>
  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  />
   <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <!-- Google Fonts Roboto -->
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
  />
  <link rel="stylesheet" type="text/css" href="assets/css/toastr.min.css"> 

  <link rel="stylesheet" href="assets/css/login.min.css" />
</head>
  <body>
   


<section class="vh-100" style="background-color: #000000;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">
              Logo
            </h3>

            <div class="form-outline mb-4">
              <input type="text" id="usrEmail" class="form-control form-control-lg" />
              <label class="form-label" >Username</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="usrPassword" class="form-control form-control-lg" />
              <label class="form-label" >Password</label>
            </div>

            <!-- Checkbox -->
            <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit" id="loginBtnConfirm">Login</button>

            <hr class="my-4">

            <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script src="assets/libs/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/login.min.js"></script>
<script type="text/javascript" src="assets/js/toastr.min.js"></script>
<script type="text/javascript" src="assets/js/toastr.init.js"></script> 
<!-- Custom scripts -->
<script type="text/javascript">
     $(document).ready(function(){
        $("#loginBtnConfirm").click(function(){
        var usrEmail=$("#usrEmail").val();
        var usrPassword=$("#usrPassword").val();

        if (usrEmail.length==0) {
            toastr.warning("Email is require");
        }else if(usrPassword.length==0){
            toastr.warning("Password is require");
        }else{
            //loginFunction(userEmail,userPassword);
            loginFunction(usrEmail,usrPassword);
        }

    });
    function loginFunction(usrEmail,usrPassword){
        $.ajax({
            url:'include/login.php',
            type:'POST',
            data:{email:usrEmail,password:usrPassword},
            success:function(response){
                if (response==1) {
                    toastr.success("Login Successful");
                    toastr.success("Thank You");
                    setTimeout(()=>{
                      location.href="index.php";
                    },1000);
                }else{
                    toastr.error("Email Or Password Wrong!");
                    //toastr.error("Please Try Again");
                }
            }
        });
        // axios.post("/onLogin",{username:username,password:userPassword})
        // .then(function(response){
        //     if (response.status==200 && response.data==1) {
        //         toastr.success("Login Successful");
        //         toastr.success("Thank You");
        //         window.location.href="/";
        //     }else{
        //         toastr.error("Please Try Again");
        //     }
        // }).catch(function(error){
        //     console.log(error);
        // });
    }
     }); 
</script>
</body>
</html>
