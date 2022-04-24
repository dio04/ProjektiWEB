<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashstyle1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <style>
        nav ul li.active{
            background-color: #800020 !important;
        }

        nav ul li.active a{
            color: white;
        }

        .sec{
            display:none;
            transition:.3s;
            animation: animate .5s ease linear;
        }

        .sec.active{
            display: flex;
            transition:.3s;
            z-index: 1000;
            animation: animate .5s ease linear;
        }

        @keyframes animate{
            0%{
                opacity: .2;
            }
            100%{
                opacity: 1;
            }
        }

        .profili, .studentet, .lendet, .orari, .profesoret, .drejtimet{
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="#">
                <img src="fotot/logo.png" alt="">
            </a>
        </div>
        <div class="adminName">
            <h3>Diorit Haxhiolli</h3>
            <a  class="burger"><i class="fa fa-bars" style="color: #800020; font-size: 30px;" ></i></a>
        </div>
    </div>

    <div class="dashboard">
        <nav>
            <ul class="lista" id="lista">
                <li class = "nav active"><a href="#">Studentet</a></li>
                <li class = "nav"><a >Lendet</a></li>
                <li class = "nav"><a >Orari</a></li>
                <li class = "nav"><a >Profesoret</a></li>
                <li class = "nav"><a >Drejtimet</a></li>
                <li class = "nav"><a >Profili</a></li>
            </ul>
        </nav>
    </div>

    <div class="all" id="all">
        <div class="studentet sec active">
            
            <?php
               
                 include "functions/dashStudenti.php";
           
            
            ?>
        </div>

        <div class="lendet sec">
            <?php
                  include "functions/dashlendet.php";
            ?>
        </div>

        <div class="orari sec">
        <?php
                  include "functions/dashOrari.php";
            ?>
        </div>


        <div class="profesoret sec">
            
        </div>


        <div class="drejtimet sec">
        <?php
                  include "functions/dashDrejtimi.php";
            ?>
        </div>

        <div class="profili sec">
            <div class="p_img">
                <img src="" alt="">
            </div>
            <div class="info">
                <div class="display">
                    <div class="kolona1">
                        <h3>Emri:</h3>
                        <h3>Mbiemri:</h3>
                        <h3>Username:</h3>
                    </div>
                    <div class="kolona2">
                        <h3>Diorit</h3>
                        <h3>Haxhiolli</h3>
                        <h3>diorit.h</h3>
                    </div>
                </div>
                
                <div class="roli">
                    <h3>Admin</h3>
                </div>
            </div>
           
        </div>

        
    </div>


    <script >
      var navs = document.querySelectorAll(".nav");
      var sect = document.querySelectorAll(".sec");
      var table = document.querySelector(".exam");
      var table1 = document.querySelector(".lendet");
      var table2 = document.querySelector(".orari");
      var table3 = document.querySelector(".drejtimi");

      navs[0].addEventListener("click", function(){
          sect[0].classList.add("active");
          table.style.display = "flex";
          sect[1].classList.remove("active");
          sect[2].classList.remove("active");
          sect[3].classList.remove("active");
          sect[4].classList.remove("active");
          sect[5].classList.remove("active");
          sect[5].style.display = "none";
      })

      navs[1].addEventListener("click", function(){
          sect[0].classList.remove("active");
          sect[1].classList.add("active");
          table.style.display = "flex";
          table1.style.display = "flex";
          table2.style.display = "flex";
          table3.style.display = "flex";
          sect[2].classList.remove("active");
          sect[3].classList.remove("active");
          sect[4].classList.remove("active");
          sect[5].classList.remove("active");
          sect[5].style.display = "none";
      })
      navs[2].addEventListener("click", function(){
          sect[0].classList.remove("active");
          sect[1].classList.remove("active");
          sect[2].classList.add("active");
          table.style.display = "flex";
          table1.style.display = "flex";
          table2.style.display = "flex";
          table3.style.display = "flex";
          sect[3].classList.remove("active");
          sect[4].classList.remove("active");
          sect[5].classList.remove("active");
          sect[5].style.display = "none";
      })
      navs[3].addEventListener("click", function(){
          sect[0].classList.remove("active");
          sect[1].classList.remove("active");
          sect[2].classList.remove("active");
          sect[3].classList.add("active");
          sect[4].classList.remove("active");
          sect[5].classList.remove("active");
          sect[5].style.display = "none";
      })
      navs[4].addEventListener("click", function(){
          sect[0].classList.remove("active");
          sect[1].classList.remove("active");
          sect[2].classList.remove("active");
          sect[3].classList.remove("active");
          sect[4].classList.add("active");
          sect[5].classList.remove("active");
          table.style.display = "flex";
          table1.style.display = "flex";
          table2.style.display = "flex";
          table3.style.display = "flex";
          sect[5].style.display = "none";
      })
      navs[5].addEventListener("click", function(){
          sect[0].classList.remove("active");
          sect[1].classList.remove("active");
          sect[2].classList.remove("active");
          sect[3].classList.remove("active");
          sect[4].classList.remove("active");
          sect[5].classList.add("active");
          sect[5].style.display = "flex";
          table.style.display = "flex";
          table1.style.display = "flex";
          table2.style.display = "flex";
          table3.style.display = "flex";
      })
    </script>
    <script>
                $(document).ready(function() {
        $(".nav").click(function () {
            $(".nav").removeClass("active");
            $(this).addClass("active");
            $(".dashboard").removeClass("active");         
        });
        });
    </script>

    <script>
        $(document).ready(function() {
        $(".burger").click(function () {
            $(".dashboard").toggleClass("active");     
        });
        });
    </script>

   
</body>
</html>