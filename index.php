<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="with = device-width, initial-scale= 1.0">
    <title>Universiteti</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
</head>

<body>
    <section class="header">
        <?php include "extensions/header.php"; ?>


        <div class="text-box">
            <h1>D&E University</h1>
            <p>Apliko tani per nje te ardhme te susesshme</p>
            <a href="" class="btn-apliko"> Apliko Ketu </a>
        </div>
    </section>

    <!-- Sherbimet -->
    <section class="sherbimet">
        <h1>Sherbimet Qe Ne Ofrojme</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <div class="row">
            <div class="course-col">
                <h3> Regjistrimi </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis. </p>
            </div>
            <div class="course-col">
                <h3> Drejtimi </h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.</p>
            </div>
            <div class="course-col">
                <h3> Diplomimi </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.</p>
            </div>
        </div>
    </section>

    <!-- campus -->
    <section class="campus">
        <h1> Kampuset Tona</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="container">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="fotot/tokyo.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="fotot/london.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="fotot/losangeles.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="fotot/ottawa.jpg" alt=""></div>
                </div>
                <div class="swiper-button-prev " id="prevb"></div>
                <div class="swiper-button-next nextb" id="nextb"></div>
            </div>
        </div>
    </section>

    <!-- Facilities -->
    <section class="facilities">
        <h1> Facilities </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </section>

    <div class="row1">
        <div class="facilities-col">
            <img src="fotot/tech.jpg">
            <h3> Kabinete High Tech </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. </p>
        </div>
        <div class="facilities-col">
            <img src="fotot/library.jpg">
            <h3> Librari </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. </p>
        </div>
        <div class="facilities-col">
            <img src="fotot/dorms.jpg">
            <h3> Konviktet </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. </p>
        </div>
    </div>

    <!-- Footer -->
    <?php include "extensions/footer.php"; ?>


    <script>
        let topbtn = document.querySelector(".top-btn")
        topbtn.onclick = function() {
            window.scrollTop({
                top: 0
            })

        }

        //;
        // var body = document.body.scrollTop;

        // topbtn.addEventListener("click", function(){
        //     body = 0;
        //     document.documentElement.scrollTop = 0;
        // })
    </script>

    <!--Script per menun(show/hide) kur faqja eshte me ni ekran me te vogel(responsive)-->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

    <!-- script per slideshow -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

</body>

</html>