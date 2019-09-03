<?php
	session_start();
	include'connection.php';
	$db=mysqli_connect($servername,$username,$password,$dbname);

	$post_id=$_GET['id'];

	$ans="SELECT users.first_name, users.last_name, posts.title, posts.discription, posts.image FROM posts INNER JOIN users ON posts.user_id = users.id WHERE posts.id = '$post_id' ";

	
	$res=mysqli_query($db,$ans);		

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="publish_style.css">
	<title>Car</title>
</head>
<body>
	<div class="container">
		
		<?php 
			if(mysqli_num_rows($res) > 0){
				while($roww = mysqli_fetch_array($res)) {
					echo('
					<div class="btn">
						<a href="index.php">Back</a>
					</div>
					<div class="main">
						
						<div class="header">			
							<h1 class="title">
							'.$roww[2].'
							</h1><!---close title-->
						</div><!---close header-->
						<div class="pic">
							<img src="data:image/jpg;base64,'.base64_encode(  $roww[4] ).'">
						</div><!---close pic-->
						<div class="article">
						'.$roww[3].'
						</div><!---close article-->
						<div class="author">
						'.$roww[0]."   ".$roww[1].'
						</div>
					</div><!---close main--> ');
				}//close while

			}//close if
		?>
	</div><!---close container-->
</body>
</html>