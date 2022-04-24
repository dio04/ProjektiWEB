<?php
    $connect = mysqli_connect("localhost", "root", "", "dioritproject");

    if(!$connect){
        die("Konetktimi deshtoi".mysqli_connect_error());
    }
    ?>