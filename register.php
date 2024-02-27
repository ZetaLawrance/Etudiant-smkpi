<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register Form</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets_login/css/custom.css">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets_login/photo/logo4.png">
        <body>
            <div class="container ">
                <div class="row">            
                    <div class="login-container col-lg-4 col-md-6 col-sm-8 col-xs-12">
                         <div class="login-title text-center">
                                <h2><span>ÉTU<strong>DIANT</strong></span></h2>
                         </div>
                        <div class="login-content">
                            <div class="login-header ">
                                <h3><strong>Halo!   </strong></h3>
                                <h5>Belum memiliki akun? Silahkan membuat akun baru anda disini</h5>
                        </div>
                        <div class="login-body">
                            <form role="form" action="cek_register.php" method="post" class="login-form">
                                <div class="form-group ">
                                    <div class="pos-r">                                        
                                        <input   id="username" type="text" name="username" placeholder="Username" class="form-username form-control">
                                        <i class="fa fa-user"></i>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="pos-r">                                    
                                        <input id="password" type="password" name="password" placeholder="Password" class="form-password form-control">
                                        <i class="fa fa-lock"></i>
                                        <span></span>                                        
                                </div>
                                <br>
                                <div class="form-group">
                                        <div class="pos-r"> 
                                        <input id="no_telepon" type="int" name="no_telepon" placeholder="Phone Number" class="form-no-telepon form-control">
                                        <i class="fa fa-phone"></i>
                                <span></span>
                            </div>
                        </div>
                    </br>
                </br>
                        <div class="form-group">     
                            <button type="submit" class="btn btn-warning form-control"><strong>Register</strong></button>  
                        </div>  