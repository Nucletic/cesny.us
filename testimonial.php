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
    <section id="hedr" style="background: none;">
        <?php require 'partials/nav.php'; ?>
        <section id="pg_cntnt" style="background: none;margin-bottom: 100px;">
            <section id="pg_cntnt_2">
                <div class="ltst_prjts" style="background: none;">
                    <div class="ltst_prjts_ttl">
                        <h1>TESTIMONIAL</h1>
                    </div>
                    <div class="ltst_prjts2">
                        <div class="wrapper2">
                            <div class="carousel3 owl-carousel">
                                <div class="card card-1">
                                    <div class="tstmonl_detl">
                                        <p>"I hired CES prior to obtaining estimates for foundation repair, from
                                            contractors. Rob provided the information I needed. His assessment provided
                                            insight into the current state of the foundation, and what needed to be done.
                                            Glad I hired them first."
                                        </p>
                                        <i class="fa fa-user-circle"></i>
                                        <div id="tstmonl_usr">- Susan H.</div>
                                    </div>
                                </div>
                                <div class="card card-1">
                                    <div class="tstmonl_detl">
                                        <p>"Robert was prompt for my inspection and thoroughly looked over my property. He
                                            put my mind at ease finding my property structurally sound. He gave me specific
                                            tips along with a list of qualified contractors for smaller projects that need
                                            to be done in the near future to protect/repair my foundation so it doesn't
                                            become a more expensive problem in the future. His rates are very fair and I
                                            feel he was very knowledgeable and didn't push me into big unnecessary projects.
                                            I would work with him again."
                                        </p>
                                        <i class="fa fa-user-circle"></i>
                                        <div id="tstmonl_usr">- Megan O.</div>
                                    </div>
                                </div>
                                <div class="card card-1">
                                    <div class="tstmonl_detl">
                                        <p>"Rob responded to my inquiry on the next business day. He came to my home to
                                            inspect our foundation on that same day and i had the report the next day. I
                                            couldn t have asked for more timely, professional service. I highly recommend
                                            CES."
                                        </p>
                                        <i class="fa fa-user-circle"></i>
                                        <div id="tstmonl_usr">- Mary S.</div>
                                    </div>
                                </div>
                                <div class="card card-1">
                                    <div class="tstmonl_detl">
                                        <p>"Robert, the engineer, was able to schedule me in the same day I called! He was
                                            very professional and friendly. He worked quickly and had me a letter of the
                                            findings the next day! Very pleased and would definitely recommend."
                                        </p>
                                        <i class="fa fa-user-circle"></i>
                                        <div id="tstmonl_usr">- Joseph P.</div>
                                    </div>
                                </div>
                                <div class="card card-1">
                                    <div class="tstmonl_detl">
                                        <p>"Robert Mann did a great job with our specs. Prompt, professional, excellent work,
                                            and affordable. I would hire him again any time."
                                        </p>
                                        <i class="fa fa-user-circle"></i>
                                        <div id="tstmonl_usr">- William B.</div>
                                    </div>
                                </div>
                                <div class="card card-1">
                                    <div class="tstmonl_detl">
                                        <p>"Bob helped me for the egress window plan and letter to my town. The response
                                            time and service quality are supper. Thanks Bob."
                                        </p>
                                        <i class="fa fa-user-circle"></i>
                                        <div id="tstmonl_usr">- Zheng C.</div>
                                    </div>
                                </div>
                                <div class="card card-1">
                                    <div class="tstmonl_detl">
                                        <p>"I initially hired an architect to do the plans for my addition/home remodel.
                                            After a unsatisfactory experience and a high price, I found Robert. Robert
                                            did an excellent job on my plans. He was responsive, stuck with the timeline
                                            he provided for me, listened to exactly what I wanted and provide a total
                                            price up front. If I could Go back, I would Use him from the start. Def
                                            would recommend if you want someone knowledgeable"
                                        </p>
                                        <i class="fa fa-user-circle"></i>
                                        <div id="tstmonl_usr">- Jazmine P.</div>
                                    </div>
                                </div>
                                <div class="card card-1">
                                    <div class="tstmonl_detl">
                                        <p>"Robert was very patient and professional. He answered all of our questions,
                                            showed up early and got right to work. I really appreciated him explaining
                                            the process to me and helping me understand the logistics of it all. Thank
                                            you! I highly recommend Robert."
                                        </p>
                                        <i class="fa fa-user-circle"></i>
                                        <div id="tstmonl_usr">- Kate B.</div>
                                    </div>
                                </div>
                                <div class="card card-1">
                                    <div class="tstmonl_detl">
                                        <p>"I had CES engineer and draft drawings for both a home addition and deck.
                                            They were thorough, quick and reasonably priced and the stamped plans
                                            were easily approved by the town for permit. CES will definitely continue
                                            to be the first place I call when the next major home project comes up!"
                                        </p>
                                        <i class="fa fa-user-circle"></i>
                                        <div id="tstmonl_usr">- Nick M.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    250: {
                        items: 1
                    },
                    200: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    800: {
                        items: 3
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