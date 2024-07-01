<?php
include('db_connect/db_connect.php');
session_start();
if (!isset($_SESSION["loggedin"])) {
    header("Location:login.php");
}
if (isset($_POST['delete_city_btn'])) {
    if (!empty($_POST['delete_city_select'])) {
        $delete_city = $_POST['delete_city_select'];
        $sql = "DELETE FROM areas_we_serve WHERE city='$delete_city'";
        $query = mysqli_query($conn, $sql);
        $affrow = mysqli_affected_rows($conn);
        if ($query) {
            if ($affrow != 1) {
                echo "*Some error occurred please try again in a moment or contact the hosting provider or website developer";
            } else {
                header("location:index.php");
            }
        } else {
            echo "*Can't execute the query please try again in a moment please try again or contact the developer";
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
            display: flex;
            flex-direction: column;
        }

        .form_dv form label h4 {
            color: #333;
            margin-top: 10px;
            margin-bottom: 2px;
        }

        .form_dv form label select {
            font-size: 16px;
            margin-top: 10px;
            padding: 6px 10px;
            width: 100%;
            color: #666;
            font-weight: 500;
            outline: none;
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

        .form_dv form label input {
            border: 1px solid #bfbfbf;
            padding: 10px;
            border-radius: 6px;
            font-size: 16px;
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
                <h4 class="show_map_ttl">Delete City</h4>
                <select name="delete_city_select" required>
                    <option selected disabled>Select a City to Delete</option>
                    <?php
                    $sql = "SELECT city, city_id FROM areas_we_serve";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($query)) {
                        $ct_nm = $row["city"];
                        $ct_id = $row["city_id"];
                        echo '<option value="' . $ct_nm . '">' . $ct_nm . '</option>';
                    }
                    ?>
                </select>
            </label>
            <button type="submit" name="delete_city_btn" class="add_city_btn">Delete City</button>
        </form>
    </div>
    <?php require 'partials/footer.php'; ?>
    <!-- Scripts -->
    <script src="script.js"></script>

</body>

</html>