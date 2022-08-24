<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from makaanlelo.com/tf_products_007/kripton/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jul 2022 17:27:50 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Kripton : Crypto Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:title" content="Kripton : Crypto Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:description" content="Kripton : Crypto Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:image" content="../../../../kripton.dexignzone.com/xhtml/social-image.png"/>
	<meta name="format-detection" content="telephone=no">
    <title>kripton - Crypto Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
									<h2>Sign in your account</h2>
									
                                    <!-- <a href="index.php"><img src="images/logo-full.png" alt="" style="max-width: 100%;"></a> -->
									</div>
                                    <!-- <h4 class="text-center mb-4">Sign in your account</h4> -->
                                    <form id="login">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <a href="">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="register.php">Sign up</a></p>
                                    </div>
                                    <div class="text-center">
                                            <a href="../">Go to HomePage</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
    <!-- <script src="js/styleSwitcher.js"></script> -->
</body>

<!-- Mirrored from makaanlelo.com/tf_products_007/kripton/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jul 2022 17:27:51 GMT -->
</html>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.js"></script>

<script>

       
       $("form#login").submit(function(e) {
           e.preventDefault();    
           var formData = new FormData(this);
           $.ajax({
               url: 'php/login.php',
               type: 'POST',
               data: formData,
               cache: false,
               contentType: false,
               processData: false,
               beforeSend:function(){
                                       Swal.fire({
                   html:'<div style="font-size: 15px; width:4rem; height:4rem;" class="spinner-border"></div>',
                   showConfirmButton:false
                   });
               
               },
               success: function (data) {
                   if(data.trim() == 'user'){
                       
                       Swal.fire({
       icon:'success',					
       html:'<div class=""> Login Succsessful</div>',
       showConfirmButton:true,
       allowOutsideClick:true
       }).then((result) => {
       location.href="index.php"; 

       })
       }
       else if(data.trim() == 'blocked'){
                       
                       Swal.fire({
       icon:'error',					
       html:'<div class=""> User Account Blocked</div>',
       showConfirmButton:true,
       allowOutsideClick:true
       })
       }
       else if(data.trim() == 'pending'){
                       
                       Swal.fire({
       icon:'error',					
       html:'<div class=""> Account is not yet Activated, click on the link sent to your mail</div>',
       showConfirmButton:true,
       allowOutsideClick:true
       })
       }
      else if(data.trim() == 'admin'){
                       
                       Swal.fire({
       icon:'success',					
       html:'<div class=""> Login Succsessful</div>',
       showConfirmButton:true,
       allowOutsideClick:true
       }).then((result) => {
       location.href="../admin/index.php";
       })
       }
       else if(data.trim() == 'failed'){
                       
                       Swal.fire({
       icon:'error',					
       html:'<div class="">Email or Password not correct</div>',
       showConfirmButton:true,
       allowOutsideClick:true
       })
       }
       else if(data.trim() == 'failed_mail'){
                       
                       Swal.fire({
       icon:'error',					
       html:'<div class="">Mail fail to send</div>',
       showConfirmButton:true,
       allowOutsideClick:true
       })
       }
       else{
                   Swal.fire({
                   icon:'error',
                   html:'<div> something went wrong</div>',
                   allowOutsideClick:true
                   });
                           }		
               },
               error:function(){
                                       },
           });
       });
       
   </script>