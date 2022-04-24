<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleloginform.css" />
    <title> Regjistrimi </title>
</head>

<body>


        <?php 
            $error = $errorEmri = $errorEmail = $errorDrejtimi = $errorUser = $errorPass ="";
            $emri = $remail = $user = "";
            $drejtimi = "Perzgjidh drejtimin";
            
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                    include 'functions/register.inc.php';
                }
            ?>
        
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form class="sign-in-form" id="form" method="POST" >
                    <h2 class="title">Kyqu</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="kyquuser" id="email" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Fjalekalimi" />
                    </div>
                    <input type="submit" value="Kyqu" name="kycu" class="btn solid" />
                    <p class="social-text" style="font-family: Arial, Helvetica, sans-serif;">Ose regjistrohu duke perdorur platformat sociale</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyInput"){
                    echo "<p>Mbushni te gjitha te dhenat</p>";
                }
                else if($_GET['error'] == "invalidemail"){
                    echo "<p>Email juaj eshte gabim !</p>";
                }
                elseif($_GET['error'] == "wrongLogin"){
                    echo "<p>Gabim!</p>";  
                }
                elseif($_GET['error'] == "none"){
                    echo "<p>Jeni regjistruar me sukses !</p>";  
                }

            }
        ?>

                <form action="" method="POST" class="sign-up-form" id="form2" >
                    <h2 class="title">Regjistrohu</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="emri" id="emri2" placeholder="Emri" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <select name = "drejtimi" class="drejtimi">
                        <option style="outline: none; border:none; background-color:transparent !impotant;" class="opt" value = "<?php echo $drejtimi;?>"><?php echo $drejtimi;?></option>
                                        <?php include "functions/selectDrejtimi.php";?>
									</select>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="user" id="mbiemri2" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="remail" id="email2" placeholder="Emaili" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="rpassword" id="password2" placeholder="Fjalekalimi" />
                    </div>
                    <input type="submit" class="btn solid" name="regjistrohu" value="Regjistrohu" />
                    <p class="social-text" style="font-family: Arial, Helvetica, sans-serif;">Ose regjistrohu duke perdorur platformat sociale</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyInput"){
                    echo "<p>Mbushni te gjitha te dhenat</p>";
                }
                else if($_GET['error'] == "invalidemail"){
                    echo "<p>Email juaj eshte gabim !</p>";
                }
                elseif($_GET['error'] == "usernametaken"){
                    echo "<p>ky username ekziston !</p>";  
                }
                elseif($_GET['error'] == "none"){
                    echo "<p>Jeni regjistruar me sukses !</p>";  
                }

            }
        ?>

        <div class="panels-container">
            <a href="index.php" class="login-out"><i class="fas fa-arrow-left"></i></a>
            <div class="panel left-panel">
                <div class="content">
                    <h3>Student i ri ?</h3>
                    <p style="font-family: Arial, Helvetica, sans-serif;">
                        Apliko ketu per te vazhduar studimet e tua ne Universitetin me te mire ne bote
                    </p>
                    <button type="submit" class="btn2 transparent" id="sign-up-btn">
                        Regjistrohu
                    </button>
                </div>
                <img src="loginimg1.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Je student i yni ?</h3>
                    <p style="font-family: Arial, Helvetica, sans-serif;">
                        Sheno ketu te dhenat e tua per te pasur qasje ne llogarine tende studentore
                    </p>
                    <button type="submit" class="btn2 transparent" id="sign-in-btn">
                        Kyqu
                    </button>
                </div>
                <img src="loginimg2.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>