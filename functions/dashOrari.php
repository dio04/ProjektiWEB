<head>
	<link rel="stylesheet" href="dashstyle1.css">
</head>

<?php

require "functions/connect.php";

$query1 = mysqli_query($connect, "SELECT * FROM orari;");

echo "<table class='exam' style='display:none;'>
<tr class='exams exa'>
	<th class='student_style'>ID</th>
	<th class='student_style'>Ora</th>
	<th class='student_style'>Lenda</th>
	<th class='student_style'>Salla</th>
	<th class='student_style'></th>
</tr>";

while($row1 = mysqli_fetch_assoc($query1)) {
	$ID = $row1['orari_ID'];
	$ora = $row1['ora'];
	$lenda = $row1['lenda_ID'];
	$salla = $row1['salla_ID'];



                echo "<tr class='exams' >
                <td class='student_style'>$ID</td>
                <td class='student_style'>$ora</td>
                <td class='student_style'>$lenda</td>
                <td class='student_style'>$salla</td>
                <td class='student_style'><a style='background-color:black;cursor:pointer; padding:2px 12px;color:whitesmoke;text-decoration:none;font-family:'Poppins',sans-serif;' href='functions/deleteorari.php?orari_ID=$ID' class='btn'>Fshij</a></td>
            </tr>";

}

echo "</table>";

?>
