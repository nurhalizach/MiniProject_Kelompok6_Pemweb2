<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin-Panel | Login</title>
<link rel="stylesheet" href="<?=BASEURL?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=BASEURL?>/css/style2.css">
<link rel="stylesheet" href="<?=BASEURL?>/css/sidebar.css">
<link rel="stylesheet" href="<?=BASEURL?>/css/addoperator.css">

</head>

<body background="<?=BASEURL?>/img/login-bg.jpg" >

<script src="<?=BASEURL?>/js/jquery.min.js"></script>
<script src="<?=BASEURL?>/js/popper.min2.js"></script>
<script src="<?=BASEURL?>/js/bootstrap.min.js"></script>



<div class="login-view">
    <div class="container">
        
        <div class="row ">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h2 class="login-heading">Admin Panel</h2>

            </div>
            <div class="col-sm-4"></div>
        </div>

       

        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form method="post" action="Login/confirm" class="login-form">
                    
                    <div class="form-group">
                        <label for="userName" class="login-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                    </div>
                    
                   
                    <div class="form-group">
                        <label for="password"class="login-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Masukkan Password" required>
                        <small id="emailHelp" class="form-text text-muted login-label">Kami tidak akan menyebarkan password Anda.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    
                    
                 </form>
            </div>
            <div class="col-sm-4"></div>

        </div>

    </div>
</div>