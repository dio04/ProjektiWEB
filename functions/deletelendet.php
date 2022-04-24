<?php

if(isset($_GET['lenda_ID'])) {
	$ID = $_GET['lenda_ID'];
	
	require "connect.php";
	
	mysqli_query($connect, "DELETE FROM lenda WHERE lenda_ID='$ID';");
	
	header("Location: dashboard.php");
}

?>