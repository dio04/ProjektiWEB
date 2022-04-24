<?php
    session_start();
?>


<nav>
    <a href="index.php"> <img class="logo" src="fotot/logo.png"> </a>
    <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li> <a href="index.php">Ballina</a> </li>
            <li> <a href="perne.php">Per Ne</a> </li>
            <li> <a href="lajmet.php">Lajmet</a> </li>
            <li> <a href="nakontakto.php">Na Kontakto</a> </li>
            <?php
                if(isset($_SESSION['userid'])){
                    echo "<li> <a href='e-student.php'>E-Student</a> </li>";
                    echo " <li> <a style='font-size: 34px;' href='functions/logout.php'><i class='fas fa-sign-out-alt'></i></a></li>";
                }
                else{
                   echo  "<li> <a style='font-size: 34px;' href='loginform.php'><i class='fas fa-sign-in-alt'></i></a></li>";
                }
            
            ?>
         
        </ul>
    </div>
    <i class="fa fa-bars" style="color: #800020; font-size: 30px;" onclick="showMenu()"></i>
</nav>