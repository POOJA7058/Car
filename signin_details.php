<?php 
    //incluse database connection  value
    include_once'connection.php';
    
    //start session
    session_start();
    $msg="";
    //connect to database
    $db=mysqli_connect($servername,$username,$password,$dbname);

    //check connection 
    if($db->connect_error){
        die("connection failed:".$db);
    }
    /*else{
        echo"connected";
    }*/

   if(isset($_POST['Login'])){
		$username=$_POST['user_name'];
	    $password=$_POST['confirm_pass'];

        $result = mysqli_query($db,"SELECT user_name, confirm_pass,id FROM users WHERE user_name = '$username'");

        $row = mysqli_fetch_array($result);
        $hashed_password=$row['confirm_pass'];
        
        if($row["user_name"]==$username && password_verify($password,$hashed_password)){
        
            //echo"welcome ";
            $new_id=$row["id"];

            //give id ino session
            $_SESSION['id']=$new_id;
             
            $_SESSION['logged_user_name']=$username;
            //header('location:home_page.php');//rediect to index page after insertion
            header('Location: index.php');
        } 
		else {
            $_SESSION['msg']="Please enter valid user name and password";
            header('Location: sign_in.php');
		}
        }
        
        if(isset($_POST['cancel'])){
            header('location: index.php'); //redirect to home page 
        }
?>