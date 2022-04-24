<?php

if(isset($_GET['orari_ID'])) {
	$ID = $_GET['orari_ID'];
	
	require "connect.php";
	
	mysqli_query($connect, "DELETE FROM orari WHERE orari_ID='$ID';");
	
	header("Location: dashboard.php");
}

?>