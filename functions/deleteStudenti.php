<?php

if(isset($_GET['studenti_ID'])) {
	$ID = $_GET['studenti_ID'];
	
	require "connect.php";
	
	mysqli_query($connect, "DELETE FROM studenti WHERE studenti_ID='$ID';");
	
	header("Location: dashStudenti.php");
}

?>