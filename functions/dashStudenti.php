<head>
	<link rel="stylesheet" href="dashstyle1.css">
</head>

<?php

require "functions/connect.php";

$query1 = mysqli_query($connect, "SELECT studenti_ID, emri, username FROM studenti;");

echo "<table class='lendet' style='display:none;'>
<tr class='exams exa'>
	<th class='student_style'>ID</th>
	<th class='student_style'>Emri</th>
	<th class='student_style'>Username</th>
	<th class='student_style'></th>
</tr>";

while($row1 = mysqli_fetch_assoc($query1)) {
	$ID = $row1['studenti_ID'];
	$emri = $row1['emri'];
	$user = $row1['username'];
	



                echo "<tr class='exams' >
                <td class='student_style'>$ID</td>
                <td class='student_style'>$emri</td>
                <td class='student_style'>$user</td>
                <td class='student_style'><a style='background-color:black;cursor:pointer; padding:2px 12px;color:whitesmoke;text-decoration:none;font-family:'Poppins',sans-serif;' href='functions/deleteStudenti.php?studenti_ID=$ID' class='btn'>Fshij</a></td>
            </tr>";

}

echo "</table>";

?>
