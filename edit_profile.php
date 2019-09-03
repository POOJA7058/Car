<?php 
    include_once'editprofile_details.php';
    
    
    if(isset($_SESSION['id'])){
        $id=$_SESSION['id'];
        $edit_state=true;
        $rec = mysqli_query($db,"SELECT * FROM users WHERE id=$id");
        $record =mysqli_fetch_array($rec);
        $user_name=$record['user_name'];
        $user_mail_id=$record['user_mail_id'];
        //$confirm_pass=$record['confirm_pass'];
        $first_name=$record['first_name'];
        $last_name=$record['last_name'];
        $id=$record['id'];   
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>car</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
        <div class="header">
                <h2>Edit Details</h2>
        </div>
        <form  method="post" action="editprofile_details.php">

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="input-group">
                <p class="fa fa-user-o">   First Name</p>
                <input type="text" name="first_name" placeholder="First Name" value="<?php echo $first_name; ?>">
            </div>  
            <div class="input-group">          
                    <p class="fa fa-user-o">   Last Name</p>
                    <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $last_name; ?>">
            </div>
            <div class="input-group">
                <p class="fa fa-user-o">  User Name</p>
                <input type="text" name="user_name" placeholder="User name" value="<?php echo $user_name; ?>">
            </div>

            <div class="input-group">
			    <p class="fa fa-envelope-open-o"> Email</p>
                <input type="email" name="user_mail_id" placeholder="Email Id" value="<?php echo $user_mail_id; ?>">
            </div>

           
            <div class="input-group">
			    <p class="fa fa-key">  Password</p>
                <input type="password" name="confirm_pass" placeholder="Password" id="cnfirm_pass" value="<?php echo ""; ?>">
            </div>
            
           
            <div class="input-group">
                <input  type="submit" name="update" value="Update" >
                <input  type="submit" name="cancel" value="Cancel" >
            </div>

            
		</form>
    </div>
   
</body>


</html>