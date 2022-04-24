<?php

if(isset($_GET['drejtimi_ID'])) {
	$ID = $_GET['drejtimi_ID'];
	
	require "connect.php";
	
	mysqli_query($connect, "DELETE FROM drejtimi WHERE drejtimi_ID='$ID';");
	
	header("Location: dashboard.php");
}

?>