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
        <h1>Per Ne</h1>
    </section>

    <section class="about-us">
        <div class="row3">
            <div class="about-col">
                <h1> Universiteti Me I Mire Ne Bote </h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="about-col">
                <img src="fotot/aboutus2.jpg" alt="">
            </div>
        </div>
    </section>


    <div class="select-banner">
        <div class="select-title">
            <h3>Informata per drejtime te caktuara</h3>
        </div>
        <select id="drejtimi" value="Perzgjedh Drejtimin" onChange="update()">
            <option class="option" value="">Perzgjedh nje Drejtim</option>
            <option class="option" value="dshk">Drejtimi i shkencave kompjuterike</option>
            <option class="option" value="dek">Drejtimi ekonomik</option>
            <option class="option" value="delk">Drejtimi i elektroteknikes</option>
            <option class="option" value="dju">Drejtimi juridik</option>
        </select>
    </div>

    <!-- banneri i pare -->

    <div class="for-us forus active" data-tag="dshk">
        <div class="for-us-tittle">
            <h3>Drejtimi i Shkencave Komjuterike</h3>
        </div>
        <div class="for-us-content">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque enim ut saepe similique quis nulla. Dicta modi officia impedit placeat.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nam dolorem ea commodi quis illum ut atque temporibus odio non?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, ab beatae. Nisi, nam natus? Vero doloremque sint iure placeat voluptatem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus libero aspernatur, laborum fugiat ea quasi necessitatibus officiis voluptatem. Veritatis, sapiente!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, qui! Reiciendis sint quibusdam distinctio fugit quisquam doloribus nostrum odit vel.
            </p>
        </div>
        <div class="for-us-pic">
            <div class="pic">
                <img src="fotot/aboutus.jpg" alt="">
                <div class="pic-title">
                    <span>Erasmus</span>
                </div>
                <div class="pic-content">
                    <h5>Erasmus</h5>
                    <p>Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            <div class="pic">
                <img src="fotot/aboutus.jpg" alt="">
                <div class="pic-title">
                    <span>Erasmus</span>
                </div>
                <div class="pic-content">
                    <h5>Erasmus</h5>
                    <p>Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            <div class="pic">
                <img src="fotot/aboutus.jpg" alt="">
                <div class="pic-title">
                    <span>Erasmus</span>
                </div>
                <div class="pic-content">
                    <h5>Erasmus</h5>
                    <p>Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
        </div>
        <div class="for-us-content">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque enim ut saepe similique quis nulla. Dicta modi officia impedit placeat.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nam dolorem ea commodi quis illum ut atque temporibus odio non?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, ab beatae. Nisi, nam natus? Vero doloremque sint iure placeat voluptatem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus libero aspernatur, laborum fugiat ea quasi necessitatibus officiis voluptatem. Veritatis, sapiente!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, qui! Reiciendis sint quibusdam distinctio fugit quisquam doloribus nostrum odit vel.
            </p>
        </div>
    </div>

    <!-- banneri i dyte  -->

    <div class="for-us forus" data-tag="dek">
        <div class="for-us-tittle">
            <h3>Drejtimi i Ekonomik</h3>
        </div>
        <div class="for-us-content">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque enim ut saepe similique quis nulla. Dicta modi officia impedit placeat.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nam dolorem ea commodi quis illum ut atque temporibus odio non?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, ab beatae. Nisi, nam natus? Vero doloremque sint iure placeat voluptatem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus libero aspernatur, laborum fugiat ea quasi necessitatibus officiis voluptatem. Veritatis, sapiente!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, qui! Reiciendis sint quibusdam distinctio fugit quisquam doloribus nostrum odit vel.
            </p>
        </div>
        <div class="for-us-pic">
            <div class="pic">
                <img src="fotot/aboutus.jpg" alt="">
                <div class="pic-title">
                    <span>Erasmus</span>
                </div>
                <div class="pic-content">
                    <h5>Erasmus</h5>
                    <p>Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            <div class="pic">
                <img src="fotot/aboutus.jpg" alt="">
                <div class="pic-title">
                    <span>Erasmus</span>
                </div>
                <div class="pic-content">
                    <h5>Erasmus</h5>
                    <p>Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            <div class="pic">
                <img src="fotot/aboutus.jpg" alt="">
                <div class="pic-title">
                    <span>Erasmus</span>
                </div>
                <div class="pic-content">
                    <h5>Erasmus</h5>
                    <p>Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
        </div>
        <div class="for-us-content">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque enim ut saepe similique quis nulla. Dicta modi officia impedit placeat.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nam dolorem ea commodi quis illum ut atque temporibus odio non?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, ab beatae. Nisi, nam natus? Vero doloremque sint iure placeat voluptatem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus libero aspernatur, laborum fugiat ea quasi necessitatibus officiis voluptatem. Veritatis, sapiente!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, qui! Reiciendis sint quibusdam distinctio fugit quisquam doloribus nostrum odit vel.
            </p>
        </div>
    </div>

    <!-- banneri i trete -->

    <div class="for-us forus" data-tag="delk">
        <div class="for-us-tittle">
            <h3>Drejtimi i Elektroteknikes</h3>
        </div>
        <div class="for-us-content">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque enim ut saepe similique quis nulla. Dicta modi officia impedit placeat.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nam dolorem ea commodi quis illum ut atque temporibus odio non?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, ab beatae. Nisi, nam natus? Vero doloremque sint iure placeat voluptatem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus libero aspernatur, laborum fugiat ea quasi necessitatibus officiis voluptatem. Veritatis, sapiente!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, qui! Reiciendis sint quibusdam distinctio fugit quisquam doloribus nostrum odit vel.
            </p>
        </div>
        <div class="for-us-pic">
            <div class="pic">
                <img src="fotot/aboutus.jpg" alt="">
                <div class="pic-title">
                    <span>Erasmus</span>
                </div>
                <div class="pic-content">
                    <h5>Erasmus</h5>
                    <p>Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            <div class="pic">
                <img src="fotot/aboutus.jpg" alt="">
                <div class="pic-title">
                    <span>Erasmus</span>
                </div>
                <div class="pic-content">
                    <h5>Erasmus</h5>
                    <p>Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            <div class="pic">
                <img src="fotot/aboutus.jpg" alt="">
                <div class="pic-title">
                    <span>Erasmus</span>
                </div>
                <div class="pic-content">
                    <h5>Erasmus</h5>
                    <p>Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
        </div>
        <div class="for-us-content">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque enim ut saepe similique quis nulla. Dicta modi officia impedit placeat.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nam dolorem ea commodi quis illum ut atque temporibus odio non?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, ab beatae. Nisi, nam natus? Vero doloremque sint iure placeat voluptatem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus libero aspernatur, laborum fugiat ea quasi necessitatibus officiis voluptatem. Veritatis, sapiente!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, qui! Reiciendis sint quibusdam distinctio fugit quisquam doloribus nostrum odit vel.
            </p>
        </div>
    </div>


    <!-- baneri i katert -->
    <div class="for-us forus" data-tag="dju">
        <div class="for-us-tittle">
            <h3>Drejtimi Juridik</h3>
        </div>
        <div class="for-us-content">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque enim ut saepe similique quis nulla. Dicta modi officia impedit placeat.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nam dolorem ea commodi quis illum ut atque temporibus odio non?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, ab beatae. Nisi, nam natus? Vero doloremque sint iure placeat voluptatem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus libero aspernatur, laborum fugiat ea quasi necessitatibus officiis voluptatem. Veritatis, sapiente!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, qui! Reiciendis sint quibusdam distinctio fugit quisquam doloribus nostrum odit vel.
            </p>
        </div>
        <div class="for-us-pic">
            <div class="pic">
                <img src="fotot/aboutus.jpg" alt="">
                <div class="pic-title">
                    <span>Erasmus</span>
                </div>
                <div class="pic-content">
                    <h5>Erasmus</h5>
                    <p>Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            <div class="pic">
                <img src="fotot/aboutus.jpg" alt="">
                <div class="pic-title">
                    <span>Erasmus</span>
                </div>
                <div class="pic-content">
                    <h5>Erasmus</h5>
                    <p>Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            <div class="pic">
                <img src="fotot/aboutus.jpg" alt="">
                <div class="pic-title">
                    <span>Erasmus</span>
                </div>
                <div class="pic-content">
                    <h5>Erasmus</h5>
                    <p>Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
        </div>
        <div class="for-us-content">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque enim ut saepe similique quis nulla. Dicta modi officia impedit placeat.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nam dolorem ea commodi quis illum ut atque temporibus odio non?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, ab beatae. Nisi, nam natus? Vero doloremque sint iure placeat voluptatem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus libero aspernatur, laborum fugiat ea quasi necessitatibus officiis voluptatem. Veritatis, sapiente!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, qui! Reiciendis sint quibusdam distinctio fugit quisquam doloribus nostrum odit vel.
            </p>
        </div>
    </div>





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



    <script>
        function update() {
            var select = document.querySelector("#drejtimi");
            var slide = document.querySelectorAll(".for-us");
            var option = select.options[select.selectedIndex];


            for (var i = 0; i < slide.length; i++) {
                var data1 = slide[0].getAttribute('data-tag');
                var data2 = slide[1].getAttribute('data-tag');
                var data3 = slide[2].getAttribute('data-tag');
                var data4 = slide[3].getAttribute('data-tag');

                var data11 = slide[0];
                var data12 = slide[1];
                var data13 = slide[2];
                var data14 = slide[3];

                if (option.value == data1) {
                    data11.classList.add("active");
                    data12.classList.remove("active");
                    data13.classList.remove("active");
                    data14.classList.remove("active");
                } else if (option.value == data2) {
                    data11.classList.remove("active");
                    data12.classList.add("active");
                    data13.classList.remove("active");
                    data14.classList.remove("active");
                } else if (option.value == data3) {
                    data11.classList.remove("active");
                    data12.classList.remove("active");
                    data13.classList.add("active");
                    data14.classList.remove("active");
                } else if (option.value == data4) {
                    data11.classList.remove("active");
                    data12.classList.remove("active");
                    data13.classList.remove("active");
                    data14.classList.add("active");
                } else if (option.value == 0) {
                    data11.classList.add("active");
                    data12.classList.remove("active");
                    data13.classList.remove("active");
                    data14.classList.remove("active");
                }

            }

        }
    </script>

</body>

</html>