<?php 

    //start session
    session_start();

    //incluse database connection  value
    //include_once'connection.php';
    
    //connect to database
    $db=mysqli_connect($servername,$username,$password,$dbname);

    //check connection 
    if($db->connect_error){
        die("connection failed:".$db);
    }
    /*else{
        echo"connected";
    }*/
   
    ///insert data into table
    if(isset($_POST['submit'])&&($_POST['password']===$_POST['confirm_pass'])){
         //varible initialization
        $user_name=$_POST['user_name'];
        $user_mail_id=$_POST['user_mail_id'];
        $confirm_pass=$_POST['confirm_pass'];
        $confirm_pass = md5($confirm_pass);//encrypt the password before saving in the database
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        

        //echo"DONE";
        $query="INSERT INTO users(user_name,user_mail_id,confirm_pass,first_name,last_name) VALUES('$user_name','$user_mail_id','$confirm_pass','$first_name','$last_name')";
        mysqli_query($db,$query);
        //$_SESSION['msg']="Done sucessfully";
        header('location:sign_up.php');//rediect to index page after insertion

    }
?>