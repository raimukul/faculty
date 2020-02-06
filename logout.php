
<?php session_start(); ?>
<?php 
	//Include GP config file

	//Unset token and user data from session
	unset($_SESSION['token']);
	unset($_SESSION['userData']);

	//Reset OAuth access token
    session_destroy();
	//Destroy entire session
	
	setcookie('userLogin', "", 1);
	//Redirect to homepage
	header("Location:index.php");
    
?>
