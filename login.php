<?php
include 'db_connect/db_connect.php';
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "Select * from login where user_name='$user_name'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['user_name'] = $user_name;
                header("Location:cms.php");
            } elseif (!password_verify($password, $row['password'])) {
                $login = false;
                $showError = "Invalid Credentials";
                echo $showError;
                sleep(3);
                header("Location:login.php");
            }
        }
    } else {
        $showError = "Invalid Credentials";
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
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label>
                <h4>User Name</h4>
                <input type="text" name="user_name" class="text_input" maxlength="32" required>
            </label>
            <label>
                <h4>Password</h4>
                <input type="password" name="password" class="text_input" maxlength="100" required>
            </label><br>
            <button type="submit" name="login_btn" class="add_city_btn">Login</button>
        </form>
    </div>
    <?php require 'partials/footer.php'; ?>
    <!-- Scripts -->
    <script src="script.js"></script>

</body>

</html>