<?php include('db_connect/db_connect.php'); ?>
<?php
if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adrs_of_prprty = $_POST['adrs_of_prprty'];
    $Message = $_POST['Message'];
    $from = $email;
    $to = "santosh.aeg@gmail.com";
    $subject = "FROM WEBSITE";
    $headers = "From: The $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    $domail =  mail($to, $subject, $Message, $headers);
    if ($domail) {
        echo "<script>alert('mail sent successfully to $email !')</script>";
    } else {
        echo "can't send mail to $email";
    }
} ?>
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
            <section>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.1342923621555!2d77.10509471471718!3d28.445367899278764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1feb7d9f133f%3A0xd514a73be2ed255a!2sC-5%202027%20park%20drive%20sector%2054%20DLF%20phase%205!5e0!3m2!1sen!2sin!4v1661853823740!5m2!1sen!2sin" width="100%" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
            <div class="contact">
                <div class="contact_lft">
                    <h1>Contact</h1>
                    <p>
                        Available for you 24/7 with rush or priority service available.</p>
                    <p>Licensed in the states of New York, Vermont, Maine, Pennsylvania,<br>
                        New Hampshire, Massachusetts, Connecticut.
                    </p>
                    <span>A minimum of $250 for a site visit and verbal report.</span>
                    <p>For questions or requests, please call 518-796-6349.</p>
                    <div class="contact_address">
                        <h2>5 Park Drive Troy,<br> NY 12180</h2>
                        <a href="tel:5187966349">518-796-6349</a><br>
                        <a href="mailto:robertmannpe@cesny.us">robertmannpe@cesny.us</a>
                    </div>
                </div>
                <div class="contact_rht">
                    <h1>Inquiries</h1>
                    <form method="POST" id="contact_form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <label>
                            <p>Full Name</p>
                            <input type="text" placeholder="Name" name="name" required>
                        </label>
                        <label>
                            <p>Email</p>
                            <input type="email" placeholder="Email" name="email" required>
                        </label>
                        <label>
                            <input type="tel" placeholder="Phone" name="phone" required>
                        </label>
                        <label>
                            <p>Address of Property</p>
                            <input type="text" placeholder="Enter your address" name="adrs_of_prprty" required>
                        </label>
                        <label>
                            <p>Your Message</p>
                            <textarea placeholder="Message" name="Message"></textarea>
                        </label>
                        <label>
                            <span>
                                <button type="submit" form="contact_form" name="Submit" value="Submit">SUBMIT</button>
                            </span>
                        </label>
                    </form>
                </div>
            </div>
        </section>
        <section class="col_or_eml">
            <p> Call or email directly before you submit information through HomeAdvisor you will save at least $50 on your site visit!!
                Home Advisor charges up to $75 to connect you to CES PLLC.</p>
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