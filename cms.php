<?php
include('db_connect/db_connect.php');
session_start();
if (!isset($_SESSION["loggedin"])) {
    header("Location:login.php");
}
if (isset($_POST['add_city'])) {
    if ((!empty($_POST['showmap'])) && (!empty($_POST['state']))
        && (!empty($_POST['city'])) && (!empty($_POST['zoomlevel']))
        && (!empty($_POST['reviewcount'])) && (!empty($_POST['checkincount']))
    ) {
        $showmap = $_POST['showmap'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $zoomlevel = $_POST['zoomlevel'];
        $reviewcount = $_POST['reviewcount'];
        $checkincount = $_POST['checkincount'];
        $sql2 = "SELECT city FROM areas_we_serve WHERE city = '$city'";
        $query2 = mysqli_query($conn, $sql2);
        $count = mysqli_num_rows($query2);
        if ($count > 0) {
            echo '<h4>A city with a same name already exist! please chose another name.</h4>';
            return false;
        }

        $sql = "INSERT INTO `areas_we_serve` (`showmap`, `state`, `city`, `zoomlevel`, 
        `reviewcount`, `checkincount`) VALUES ('$showmap', '$state', '$city', '$zoomlevel', '$reviewcount', '$checkincount')";
        $query = mysqli_query($conn, $sql);
        $affrow = mysqli_affected_rows($conn);
        if ($query) {
            header("Location:areas_we_serve.php");
        } else {
            echo "*Can't execute the query please try again in a moment";
            echo "Redirecting to the home page in 3 seconds";
            sleep(3);
            header("location:cms.php");
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
        .form_dv {
            height: 90vh;
            background-image: linear-gradient(rgba(30, 30, 30, 0.7), rgba(4, 9, 30, 0.747)), url(images/floor-plan-2.jpg);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form_dv form {
            -webkit-box-shadow: 0px 0px 20px 0px rgba(200, 200, 200, 0.7);
            -moz-box-shadow: 0px 0px 20px 0px rgba(200, 200, 200, 0.7);
            box-shadow: 0px 0px 20px 0px rgba(200, 200, 200, 0.7);
            padding: 30px 40px 30px 40px;
            border-radius: 10px 10px 10px 10px;
            border: 0px solid #f0f0f0;
            background: #fff;
        }

        .form_dv form label h4 {
            color: #333;
            margin-top: 10px;
            margin-bottom: 2px;
        }

        .form_dv form label input {
            border: 1px solid #bfbfbf;
            padding: 10px;
            border-radius: 6px;
            font-size: 16px;
        }

        .form_dv form label .text_input {
            width: 400px;
        }

        .form_dv form label .show_map_ttl {
            margin-bottom: 5px;
        }

        .form_dv form label span {
            font-size: 16px;
            color: #333;
            margin-left: 10px;
            margin-right: 30px;
            font-weight: 600;
        }

        .form_dv form label .showmap_input_ {
            height: 16px;
            width: 16px;
            vertical-align: -2px;
            cursor: pointer;
        }

        .form_dv form .add_city_btn {
            background: #01CCFF;
            color: #fff;
            font-weight: 600;
            font-size: 18px;
            letter-spacing: 1px;
            border-radius: 3px;
            border: none;
            width: 400px;
            padding: 10px;
            margin-top: 20px;
            margin-bottom: 0px;
            cursor: pointer;
        }

        .form_dv form .add_city_btn:hover {
            background: #00bfff;
        }

        #city_same_validate {
            color: #ff0000;
            font-size: 12px;
            display: none;
        }

        @media only screen and (max-width: 490px) {
            .form_dv form {
                padding: 4% 5%;
                border-radius: 6px;
            }

            .form_dv form label .text_input {
                width: 360px;
            }

            .form_dv form .add_city_btn {
                width: 100%;
            }
        }

        @media only screen and (max-width: 400px) {
            .form_dv form label .text_input {
                width: 280px;
            }
        }
    </style>
</head>

<body>
    <?php require 'partials/nav.php'; ?>
    <div class="form_dv">
        <form method="POST" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
            <label>
                <h4 class="show_map_ttl">ShowMap</h4>
                <input type="radio" name="showmap" class="showmap_input_" value="yes" maxlength="3" required>
                <span>Yes</span>
                <input type="radio" name="showmap" class="showmap_input_" value="no" maxlength="2" required>
                <span>No</span>
            </label>
            <label>
                <h4>State</h4>
                <input type="text" name="state" class="text_input" maxlength="100" required>
            </label>
            <label>
                <h4>City</h4>
                <input type="text" name="city" class="text_input" maxlength="100" required>
                <h3 id="city_same_validate">*City with this name already exist</h3>
            </label>
            <label>
                <h4>ZoomLevel</h4>
                <input type="number" name="zoomlevel" class="text_input" maxlength="2">
            </label>
            <label>
                <h4>ReviewCount</h4>
                <input type="text" name="reviewcount" class="text_input" maxlength="11">
            </label>
            <label>
                <h4>CheckInCount</h4>
                <input type="text" name="checkincount" class="text_input" maxlength="2">
            </label><br>
            <button type="submit" name="add_city" class="add_city_btn">Add City</button>
        </form>
    </div>
    <?php require 'partials/footer.php'; ?>
    <!-- Scripts -->
    <script src="script.js"></script>

</body>

</html>