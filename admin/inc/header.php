<?php session_start();
	if(!isset($_SESSION['a_email'])){
		header("Location:login.php");	
	}
?>
<div id="header">
    <h1><b>Royal <span>Collection</span></b><label><a href="logout.php">Logout</a></label></h1>   	
</div><!--end of header-->