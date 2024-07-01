<?php include('db_connect/db_connect.php'); ?>
<?php

function timeAgo($time_ago)
{
    $time_ago = strtotime($time_ago);
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed;
    $minutes    = round($time_elapsed / 60);
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400);
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640);
    $years      = round($time_elapsed / 31207680);
    // Seconds
    if ($seconds <= 60) {
        return "just now";
    }
    //Minutes
    else if ($minutes <= 60) {
        if ($minutes == 1) {
            return "one minute ago";
        } else {
            return "$minutes minutes ago";
        }
    }
    //Hours
    else if ($hours <= 24) {
        if ($hours == 1) {
            return "an hour ago";
        } else {
            return "$hours hrs ago";
        }
    }
    //Days
    else if ($days <= 7) {
        if ($days == 1) {
            return "yesterday";
        } else {
            return "$days days ago";
        }
    }
    //Weeks
    else if ($weeks <= 4.3) {
        if ($weeks == 1) {
            return "a week ago";
        } else {
            return "$weeks weeks ago";
        }
    }
    //Months
    else if ($months <= 12) {
        if ($months == 1) {
            return "a month ago";
        } else {
            return "$months months ago";
        }
    }
    //Years
    else {
        if ($years == 1) {
            return "one year ago";
        } else {
            return "$years years ago";
        }
    }
}
?>
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
            width: 90%;
            margin: auto;
        }

        .served_area_ttl {
            color: #333;
            font-size: 32px;
            margin: auto;
            padding-top: 30px;
        }
    </style>
</head>

<body>
    <?php require 'partials/nav.php'; ?>
    <div class="low_wdt">
        <div class="low_wdt_2">

            <?php
            include('db_connect/db_connect.php');
            $ct_id = $_GET['ct_id'];
            $city_name = $_GET['city_name'];
            $sql = "SELECT * FROM areas_we_serve WHERE city_id = $ct_id";
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($query)) {
                $showmap = $row["showmap"];
                $state = $row["state"];
                $city = $row["city"];
                $zoomlevel = $row["zoomlevel"];
                $reviewcount = $row["reviewcount"];
                $checkincount = $row["checkincount"];
            }
            echo '
            <h1 class="served_area_ttl" >Structural Engineering And Foresic Engineering Services In ' . $city . ', ' . $state . '</h1>
                <div id="rwl-output"></div>
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <link href=https://d2gwjd5chbpgug.cloudfront.net/v3/css/nnplugin.min.css rel="stylesheet" type="text/css" />
                <script src=https://d2gwjd5chbpgug.cloudfront.net/v3/scripts/heatmap.min.js></script>
                <script type="text/javascript">
                    //serviceareareviewcombo
                    //reviews
                    //servicearea
                    //photogallery
                    //testimonials 
                    jQuery(document).ready(function() {
                        jQuery.ajax({
                            url: "https://rwlnbnrelay.b4a.app/nbn/servicearea",
                            type: "GET",
                            crossDomain: true,
                            data: {
                                storefrontToken: "81c5aa03-fde3-454b-b1f3-cc80f404db26",
                                showmap: "' . $showmap . '",
                                state: "' . $state . '",
                                city: "' . $city . '",
                                zoomlevel: "' . $zoomlevel . '",
                                reviewcount: "' . $reviewcount . '",
                                checkincount: "' . $checkincount . '"
                            },
                            dataType: "json",
                            success: function(response) {
                                jQuery("#rwl-output").html(response.content);
                            },
                            error: function(xhr, status) {
                                console.log(xhr, status);
                            }
                        });
                    });
                </script>';
            ?>

            <?php
            include('db_connect/db_connect.php');

            $getpost = "select * from posts where city='" . $_GET['ct_id'] . "'";
            $getposts = $conn->query($getpost);
            while ($posts = $getposts->fetch_assoc()) {
            ?>
                <div class="nn-samap-cont" itemscope="" itemtype="http://schema.org/UserCheckins">
                    <hr>
                    <div class="nn-samap-header">
                        <meta itemprop="name" content="Consultant Engineering Services, PLLC Job Location">

                        <div class="nn-samap-map-cont">

                            <img itemprop="image" class="nn-samap-ci-image" style="padding-bottom: 5px;" src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $_GET['city_name']; ?>,<?php echo $posts['state']; ?>,<?php echo $posts['postal']; ?>&zoom=12&size=600x400&key=AIzaSyBRFnS4DlwTe7tQdwwo6MnjvU-Phb_sKNE" />

                        </div>

                        <img src="images/54a5266dcf84e189c732fbf021a0d5b9.png" class="nn-samap-gravatar" title="Robert M." alt="Robert M.">

                        <h3 itemprop="attendees"><?php echo $posts['team_member']; ?></h3>
                        <h4><time itemprop="startDate" datetime="2022-07-25T15:32:37.8700000">

                                <?php
                                echo $time_elapsed = timeAgo($posts['rdate']);
                                ?>

                            </time></h4>

                        <p itemprop="description" class="nn-samap-body">
                            <?php echo $posts['description']; ?>
                        </p>
                        <div class="nn-samap-near" itemprop="location" itemscope="" itemtype="http://schema.org/Place">
                            Near
                            <span><?php echo $posts['address']; ?></span>, <span><?php echo $_GET['city_name']; ?></span>, <span><?php echo $posts['state']; ?></span> <span><?php echo $posts['postal']; ?></span>

                            <div itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                <meta itemprop="latitude" content="42.6525">
                                <meta itemprop="longitude" content="-73.7875">
                            </div>
                        </div>
                        <div style="clear: both;"></div>


                        <img itemprop="image" src="images/<?php echo $posts['photos']; ?>" alt="Albany, NY - Structural engineering to design beam to remove load bearing wall." title="Albany, NY - Structural engineering to design beam to remove load bearing wall." class="nn-samap-ci-image" style="padding-bottom: 5px;">

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php require 'partials/footer.php'; ?>
    <!-- Scripts -->
    <script src="script.js"></script>

    </script>
</body>

</html>