<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>PMS | Home</title>

<head>
    <?php

    include 'php/head.php';
    ?>




</head>

<body>
    <!-- header starts -->
    <?php
    $bgcolor = '#A7C7E7';
    $opacity=50;
    echo "<body style='background-color : $bgcolor ,$opacity'>";
    include 'php/header.php'

    ?>
    <!-- header ends -->

    <section id="hero-animated" class="hero-animated d-flex align-items-center" >
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
            <img src="assets/img/placement.png" class="img-fluid animated">
            <h2>Welcome to Placement Management System</h2>
            <p>We will be with you till your Placement is Done.</p>
            <div class="d-flex">
                <a href="login.php" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div>
    </section>

    <main id="main">

      

        </div>

        </div>
        </section>

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client1.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client2.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client3.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client4.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client5.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client6.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client7.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client8.png" class="img-fluid" alt=""></div>
                    </div>
                </div>

            </div>
        </section><!-- End Clients Section -->



        <!-- ======= Features Section ======= -->
        <section id="objectives" class="features" name="objectives">
            <div class="container" data-aos="fade-up">
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    <?php

    include 'php/footer.php';
    ?>

    <!-- End Footer -->
    <!-- JS FILES -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="{% static 'js/tabs.js' %}"></script>
    <style>

    </style>
    <script>
        // ===== Scroll to Top ==== 
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 50) {
                $('#return-to-top').fadeIn(200); 
            } else {
                $('#return-to-top').fadeOut(200); 
            }
        });
        $('#return-to-top').click(function() { 
            $('body,html').animate({
                scrollTop: 0 
            }, 500);
        });

        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
        $("#button").click(function() {
            $('html, body').animate({
                scrollTop: $("#about").offset().top
            }, 1000);
        });
        $("#button1").click(function() {
            $('html, body').animate({
                scrollTop: $("#events").offset().top
            }, 1000);
        });
    </script>
    <script src="assets/js/main1.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="assets/js/counter.js"></script>



</body>

</html>