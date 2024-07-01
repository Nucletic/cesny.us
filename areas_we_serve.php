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
    <style>
        .low_wdt {
            width: 100%;
            background: #f7f7f7;
        }

        .low_wdt_2 {
            padding: 120px;
            width: 90%;
            margin: auto;
            line-height: 22px;
        }

        .served_area_ttl {
            color: #333;
            margin-bottom: 20px;
            font-size: 32px;
            padding-top: 30px;
        }

        #hedr_3 {
            height: 40vh;
            background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.747)), url(images/floor-plan-2.jpg) !important;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .ar_w_srv_ars_btns {
            color: #FF6043;
            text-decoration: none;
        }

        .ar_w_srv_ars_btns:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php require 'partials/nav.php'; ?>
    <section id="hedr_3">
    </section>
    <div class="low_wdt">
        <div class="low_wdt_2">
            <?php
            $sql = "SELECT * FROM areas_we_serve";
            $query = mysqli_query($conn, $sql);
            echo '<h1 class="served_area_ttl">Areas We Serve Structural Engineer And Forensic Engineer</h1>';
            echo '<span class="com_ct_jb_ttl">Cities we have completed jobs for in</span> ';
            while ($row = mysqli_fetch_assoc($query)) {
                $ct_nm = $row["city"];
                $ct_id = $row["city_id"];
                echo '<a href="served_area.php?ct_id=' . $ct_id . '&city_name=' . $ct_nm . '" class="ar_w_srv_ars_btns">' . $ct_nm . '</a>';
                echo ', ';
            }
            ?>
        </div>
    </div>

    <?php require 'partials/footer.php'; ?>
    <!-- Scripts -->
    <script src="script.js"></script>

</body>

</html>