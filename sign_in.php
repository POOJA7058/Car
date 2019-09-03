<?php 
    include_once'signin_details.php';
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>sign_up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body background="backk.jpg">

    <div class="signup__box">
        <div class="header">
                <h2>Sign In</h2>
        </div>
        <form  method="post" action="signin_details.php">
           
            <?php if(isset($_SESSION['msg'])):?>
                <div class="input-group">
                    <?php
                        echo $_SESSION['msg'];
                       // unset($_SESSION['msg']);
                    ?>
                </div>
            <?php endif ?>
            <div class="input-group">
                <p class="fa fa-user-o">  User Name</p>
                <input type="text" name="user_name" placeholder="User name">
            </div>

            <div class="input-group">
                <p class="fa fa-key"> Password</p>
                <input type="password" name="confirm_pass" placeholder="password" id="pass" >
            </div>
            
            <div class="input-group">
                <input  type="submit" name="Login" value="Login">
                <input  type="submit" name="cancel" value="Cancel">
            </div>
		</form>
    </div>
</body>
</html>