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
    <section id="hedr" class="garage_barn_design_hedr residential_hedr">
        <?php require 'partials/nav.php'; ?>
        <section id="hedr_2">
            <div class="lnd_pg_txt">
                <h1>Residential Garage & Barn Design</h1>
                <p>Garages and Barns have more purposes than just storage.
                    Many people use them as workshops, social venues, or
                    with attached guest accommodations.</p>
            </div>
        </section>
        <section id="pg_cntnt">
            <section id="pg_cntnt_2">
                <div class="dnags">
                    <div class="dnags_mns" style="height: auto!important;">
                        <div class="dnags_main">
                            <img src="images/a_svg.png">
                            <div class="dnags_ttl">
                                <h2><a href="javascript:void(0)">Garage Design</a></h2>
                                <p>Garages, Car ports, slab on grade or footings</p>
                            </div>
                        </div>
                    </div>
                    <div class="dnags_mns" style="height: auto!important;">
                        <div class="dnags_main">
                            <img src="images/aar_svg.png">
                            <div class="dnags_ttl">
                                <h2><a href="javascript:void(0)">Barn Design</a></h2>
                                <p>Horse barn, clear span</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="swafq">
            <div class="swafq_2">
                <h1>Start With A Free Quote!</h1>
                <a href="contact.php">GET A QUOTE<i class="fa fa-chevron-right"></i></a>
            </div>
        </section>
        <section class="or_prjts">
            <div class="or_prjts_ttl">
                <h1>Our Projects</h1>
            </div>
            <section class="or_prjts_2">
                <div class="mn_prjts">
                    <img src="images/image_laptop_1.jpg">
                    <div class="prjt_nm">
                        <a href="javascript:void(0)">
                            <h2>Two Car Garage</h2>
                        </a>
                    </div>
                </div>
                <div class="mn_prjts">
                    <img src="images/image_laptop_2.jpg">
                    <div class="prjt_nm">
                        <a href="javascript:void(0)">
                            <h2>Car Port Addition</h2>
                        </a>
                    </div>
                </div>
                <div class="mn_prjts">
                    <img src="images/image_laptop_3.jpg">
                    <div class="prjt_nm">
                        <a href="javascript:void(0)">
                            <h2>40 X 40 Garage</h2>
                        </a>
                    </div>
                </div>
                <div class="mn_prjts">
                    <img src="images/image_laptop_4.jpg">
                    <div class="prjt_nm">
                        <a href="javascript:void(0)">
                            <h2>Horse Barn</h2>
                        </a>
                    </div>
                </div>
                <div class="mn_prjts">
                    <img src="images/image_laptop_5.jpg">
                    <div class="prjt_nm">
                        <a href="javascript:void(0)">
                            <h2>New Garage with Concrete Roof</h2>
                        </a>
                    </div>
                </div>
                <div class="mn_prjts">
                    <img src="images/image_laptop_6.jpg">
                    <div class="prjt_nm">
                        <a href="javascript:void(0)">
                            <h2>30x40 Garage</h2>
                        </a>
                    </div>
                </div>
            </section>
        </section>
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