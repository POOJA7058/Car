<?php 

    //start session
    session_start();

    //incluse database connection  value
    include_once'connection.php';
    
    //connect to database
    $db=mysqli_connect($servername,$username,$password,$dbname);

    //check connection 
    if($db->connect_error){
        die("connection failed:".$db);
    }
    /*else{
        echo"connected";
    }*/
   
    //insert data into table
    if(isset($_POST['update'])){
        
         //varible initialization
        $id=mysqli_real_escape_string($db, $_POST['id']);
        $user_name=mysqli_real_escape_string($db,$_POST['user_name']);
        $user_mail_id=mysqli_real_escape_string($db,$_POST['user_mail_id']);
        $confirm_pass=mysqli_real_escape_string($db,$_POST['confirm_pass']);
        $confirm_pass = password_hash($confirm_pass,PASSWORD_DEFAULT);//encrypt the password before saving in the database
        $first_name=mysqli_real_escape_string($db,$_POST['first_name']);
        $last_name=mysqli_real_escape_string($db,$_POST['last_name']);
               
        mysqli_query($db,"UPDATE users SET user_name='$user_name',user_mail_id='$user_mail_id',confirm_pass='$confirm_pass',first_name='$first_name',last_name='$last_name' WHERE id=$id");
        //$_SESSION['msg']="Details Update";
        header('Location: home_page.php');

    }
    if(isset($_POST['cancel'])){
        header('Location: home_page.php');

    }   
?>