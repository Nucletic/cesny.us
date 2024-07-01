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
        <section id="hedr_2">
            <div class="lnd_pg_txt">
                <h1>Residential Additions & Renovations</h1>
                <p>Whether you're looking to add an extra room, a loft, or a whole second floor,
                    we're here for you from start to finish. We can do everything from drafting
                    different floor plans and ideas to 3D modeling, as well as code reviews and
                    official site plans.
                </p>
            </div>
        </section>
        <section id="pg_cntnt">
            <section id="pg_cntnt_2">
                <div class="dnags">
                    <div class="dnags_mns" style="height: auto!important;">
                        <div class="dnags_main">
                            <img src="images/a_svg.png">
                            <div class="dnags_ttl">
                                <h2><a href="javascript:void(0)">Additions</a></h2>
                                <p>Adding a extra room, loft, or a whole second floor</p>
                            </div>
                        </div>
                    </div>
                    <div class="dnags_mns" style="height: auto!important;">
                        <div class="dnags_main">
                            <img src="images/aar_svg.png">
                            <div class="dnags_ttl">
                                <h2><a href="javascript:void(0)">Renovations</a></h2>
                                <p>Redesign the entire floor plan, open up and remove load bearing walls.</p>
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
                    <img src="images/ar_prjt_1.jpg">
                    <div class="prjt_nm">
                        <a href="javascript:void(0)">
                            <h2>Second Strory Addition</h2>
                        </a>
                    </div>
                </div>
                <div class="mn_prjts">
                    <img src="images/ar_prjt_2.jpg">
                    <div class="prjt_nm">
                        <a href="javascript:void(0)">
                            <h2>Addition</h2>
                        </a>
                    </div>
                </div>
                <div class="mn_prjts">
                    <img src="images/ar_prjt_3.jpg">
                    <div class="prjt_nm">
                        <a href="javascript:void(0)">
                            <h2>Flitch Beam Design</h2>
                        </a>
                    </div>
                </div>
                <div class="mn_prjts">
                    <img src="images/ar_prjt_4.jpg">
                    <div class="prjt_nm">
                        <a href="javascript:void(0)">
                            <h2>Screened In Porch With Deck</h2>
                        </a>
                    </div>
                </div>
                <div class="mn_prjts">
                    <img src="images/ar_prjt_5.jpg">
                    <div class="prjt_nm">
                        <a href="javascript:void(0)">
                            <h2>Home Office Addition</h2>
                        </a>
                    </div>
                </div>
                <div class="mn_prjts">
                    <img src="images/ar_prjt_6.jpg">
                    <div class="prjt_nm">
                        <a href="javascript:void(0)">
                            <h2>20x20 Addition</h2>
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