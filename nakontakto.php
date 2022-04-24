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
    <section class="about-us-header">
        <?php include "extensions/header.php"; ?>
        <h1>Na Kontakto</h1>
    </section>

    <section class="contact-banner">
        <div class="contact-first">
            <div class="contact-info">
                <div class="location">
                    <i class="fas fa-map-marked-alt"></i>
                    <div class="location-text">
                        <h4>Lokacioni:</h4>
                        <p>Rruga Prishtine - Lipjan</p>
                    </div>
                </div>
                <div class="number">
                    <i class="fas fa-mobile"></i>
                    <div class="number-text">
                        <h4>Nr.kontaktues</h4>
                        <p>+383 49 366 366</p>
                    </div>
                </div>
                <div class="email">
                    <i class="fas fa-mail-bulk"></i>
                    <div class="email-text">
                        <h4>Email zyrtar:</h4>
                        <p>ubt-faculty@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <form action="">
                    <label for="">Na Kontaktoni</label>
                    <h5>Jepni mendimin tuaj dhe merrni pergjigjet e duhura !</h5>

                    <div class="form-inputs">
                        <input type="text" name="email" placeholder="Emaili juaj" class="email-input">
                        <textarea name="mesazhi" placeholder="Jepni mendimin tuaj" rows="5" class="mesazhi"></textarea>
                        <input type="submit" value="Dergo" class="dergo">
                    </div>


                </form>
            </div>
        </div>

        <div class="contact-second">
            <div class="contact-frame">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47010.682998936005!2d21.123488130114094!3d42.57296314316066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549d2cc6e13dd5%3A0xf9155209d4ad0657!2sKolegji%20UBT!5e0!3m2!1ssq!2s!4v1647737581752!5m2!1ssq!2s" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="contact-social">
                <a href="" class="facebook"><i class="fab fa-facebook"></i></a>
                <a href="" class="instagram"><i class="fab fa-instagram"></i></a>
                <a href="" class="twiter"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

    </section>

    <!-- Footer -->
    <?php include "extensions/footer.php"; ?>

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