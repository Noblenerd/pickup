<?php
    session_start();


    if(!isset($_SESSION['user'])) {


    header("location:index.php");
}
else {
	$user = $_SESSION['user'];
	include('connect.php');
}

?>