<!DOCTYPE html>
<html lang="en">
    
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login form</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets_login/css/custom.css">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets_login/photo/Logo.ico">

    </head>

    <body>
        <div class="container ">
            <div class="row">            
                <div class="login-container col-lg-4 col-md-6 col-sm-8 col-xs-12">
                    <div class="login-title text-center">
                            <h2><span>ÉTU<strong>DIANT</strong></span></h2>
                    </div>
                    <div class="login-content">
                        <div class="login-header ">
                            <h3><strong>Welcome,</strong></h3>
                            <h5>Silahkan masukan data anda untuk memasuki web Étudiant</h5>
                        </div>
                        <div class="login-body">
                            <form role="form" action="cek_login.php" method="post" class="login-form">
                                <div class="form-group ">
                                    <div class="pos-r">                                        
                                        <input id="form-username" type="text" name="email" placeholder="Email" class="form-username form-control" required>
                                        <i class="fa fa-user"></i>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="pos-r">                                    
                                        <input id="form-password" type="password" name="password" placeholder="Password" class="form-password form-control" required>
                                        <i class="fa fa-lock"></i>
                                        <span></span>                                        
                                    </div>
                                </div>
                                <div class="form-group text-right">     
                                    <a href="forgot-password.php" class="bold">Forgot password?</a>
                                </div>   

                                <div class="form-group">     
                                    <button type="submit" class="btn btn-warning form-control"><strong>Sign in</strong></button>  
                                </div>   
                            </form>
                        </div> <!-- end  login-body -->                     
                    </div><!-- end  login-content -->  
                    <div class="login-footer text-center template">
                        <h5>Don't have an account?<a href="register.php" class="bold">Sign up </a>     </h5>
                    </div>
                </div>  <!-- end  login-container -->      

            </div>
        </div><!-- end container -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>

</html>