<?php include('db_connect/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultant Engineering Services PLLC, Structrual Engineer, Forensic Engineer, Residential Design</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>

<body>
    <section id="hedr" class="addition_renovations_hedr residential_hedr">
        <?php require 'partials/nav.php'; ?>
        <section id="pg_cntnt">
            <section id="pg_cntnt_2">
                <div class="we_de_dr">
                    <div class="we_de_dr_lft">
                        <img src="images/image_laptop123.jpg">
                    </div>
                    <div class="we_de_dr_rht">
                        <h1>We Design Dreams</h1>
                        <div class="we_de_dr_rht_2">
                            <div class="we_de_dr_rht_sd_br"></div>
                            <h3>
                                Our practice seeks to provide sensitive, creative and innovative
                                solutions to problems and opportunities in the residential environment
                            </h3>
                        </div>
                        <p>Robert Mann is a Professional Engineer licensed in the states of New York, Vermont,
                            New Hampshire, Maine, & Pennsylvania, Massachusetts, Connecticut. He specializes
                            in Structural Engineering, Forensic Engineering and residential design. As the owner
                            of Consultant Engineering Services PLLC, Robert is committed to providing rapid, accurate,
                            professional, structural, forensic inspections and design services to the residential market.
                        </p>
                        <div class="we_de_dr_btn">
                            <a href="contact.php">CONTACT US <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="swafq">
            <div class="swafq_2_about">
                <h1>Collaboration</h1>
                <h1>Positive Outcomes</h1>
            </div>
        </section>
        <div class="our_team">
            <div class="our_team_ttl">
                <h1>Our Team</h1>
            </div>
            <div class="our_team_2">
                <div class="our_team_main">
                    <img src="images/image_laptop (13).jpg">
                    <h2>Robert Mann PE</h2>
                    <h3>Owner</h3>
                </div>
            </div>
        </div>
        <?php require 'partials/footer.php'; ?>
        <!-- Scripts -->
        <script src="script.js"></script>
        <script>
            $('.carousel').owlCarousel({
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 3000,
                // autoplayHoverPause: true,
                // nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 4
                    },
                    1040: {
                        items: 6
                    }
                }
            })
            $('.carousel2').owlCarousel({
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 3000,
                // autoplayHoverPause: true,
                // nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1250: {
                        items: 1
                    }
                }
            })
            $('.carousel3').owlCarousel({
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 3000,
                // autoplayHoverPause: true,
                // nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1250: {
                        items: 1
                    }
                }
            })
        </script>
</body>

</html>