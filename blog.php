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
    <section id="hedr" style="background: none!important;" class="addition_renovations_hedr residential_hedr">
        <?php require 'partials/nav.php'; ?>
        <section class="blog">
            <section class="blog_main">
                <div class="blog_1">
                    <h1>Roof Structural Inspection</h1>
                    <h2>01 Nov 2021|Robert Mann P.E.</h2>
                    <p>Niskayuna, NY. Client called to have roof inspected because last winter they had the snow removed from the roof and the contractor said the roof was bouncy during the the snow removal. Today I went up on the roof and it was bouncy. Went up in the attic space and the rafters were 2x6 @ 16" with a 2x8 ridge board. No hangers or collar ties were on this roof causing the roof to be bouncy.</p>
                </div>
                <div class="blog_1">
                    <h1>Floor Structural Inspection</h1>
                    <h2>01 Nov 2021|Robert Mann P.E.</h2>
                    <p>Granville, NY. Client call requesting a structural inspection of the floor framing because they had noticed that the floors were sloping and seperating from the walls. During the structuial inspection it was found that the floor framing was not properly supported and was seperating from the beams allowing the floor above to sag.</p>
                </div>
                <div class="blog_1">
                    <h1>Foundation Structural Inspection</h1>
                    <h2>01 Nov 2021|Robert Mann P.E.</h2>
                    <p>Salem, NY. Client call they were purchasing a house and the home inspection indicated questions with the foundation. A structural inspection and forensic inspection was completed on the foundation to detrmine if the added supportes were doing their job supporting the foundation wall from further movement.</p>
                </div>
                <div class="blog_1">
                    <h1>Roof Structural Inspection</h1>
                    <h2>01 Nov 2021|Robert Mann P.E.</h2>
                    <p>Manchester, VT. Client call to have the roof and foundation inspected for suspected structrural issues. A structural inspection and forensic inspection was completed on the house to deteremine the casue fo the sloping roof and cause of the cracks in the foundation. </p>
                </div>
                <div class="blog_1">
                    <h1>Consultant Engineering Services PLLC</h1>
                    <h2>30 Oct 2021|Robert Mann P.E.</h2>
                    <p>The first blog post for CES. In furture posts I will talk about my structural and forensic inspections. Why these are a structural concern or not. I will aslo discuss how the building code and getting permits are a vital part of the repair process.</p>
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