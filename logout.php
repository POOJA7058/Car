<?php
session_start();
unset($_SESSION['id']);
session_destroy();
header('location:index.php');//rediect to index page after logout
exit();
?>