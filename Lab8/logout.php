<?php
	// Remove the user from the session to log them out	
    session_start();
	$_SESSION['authenticatedUser'] = null;
	$_SESSION['productList'] = null;
	header('Location: index.php');	
?>

