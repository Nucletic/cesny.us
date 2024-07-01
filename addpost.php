<?php include('db_connect/db_connect.php');
session_start();
if (!isset($_SESSION["loggedin"])) {
    header("Location:login.php");
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

    <?php
    function getExtn($filename)
    {
        $ext = explode(".", $filename);
        return $ext[1];
    }

    include 'db_connect/db_connect.php';
    $addresult = '';
    if ($_POST) {
        $team_member = $_POST['team_member'];
        $customer_name = $_POST['customer_name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $st = $_POST['st'];
        $postal_code = $_POST['postal_code'];
        $description = $_POST['description'];
        date_default_timezone_set('Asia/Kolkata');
        $rdate = date('d-m-Y h:i:s');

        $imagename = date("dmYhis");
        $imgfile = "";
        if (is_array($_FILES)) {
            if (is_uploaded_file($_FILES['photo']['tmp_name'])) {
                $sourcePath = $_FILES['photo']['tmp_name'];
                $fileext = getExtn($_FILES['photo']['name']);
                $imgfile = "" . $imagename . "." . 'jpg';
                //$imgfile = "grp".substr(md5(rand(5265,95456)),0,10).".".$fileext;                        
                if (move_uploaded_file($sourcePath, "images/" . $imgfile)) {
                }
            }
        }

        echo  $getcity = "select city from areas_we_serve where city_id='" . $city . "'";
        $getcitty = $conn->query($getcity);
        $gotcity = $getcitty->fetch_assoc();

        $addrec = "insert into posts (team_member,customer_name,address,city,state,postal,photos,description,rdate) values('$team_member','$customer_name','$address','$city','$st','$postal_code','$imgfile','$description','$rdate')";

        $addrecs = $conn->query($addrec);
        if ($addrecs) {

            $addresult = '<div class="alert alert-success">
          <strong>Post added Successfully.</strong>
          </div>';
            echo "<script>setTimeout(function(){window.location.href='served_area.php?addrs=" . $address . "&ct_id=" . $city . "&city_name=" . $gotcity['city'] . "'},1);</script>";
        } else {
            $addresult = '<div class="alert alert-danger">
          <strong>Something went wrong.</strong>
          </div>';
        }
    }
    ?>


    <?php require 'partials/nav.php'; ?>


    <div class="container" style="padding: 15px 60px;">
        <div class="row">
            <div class="col-md-4">
                <div class="form_main">
                    <h4 class="heading"><strong>Add </strong> Post <span></span></h4>
                    <div class="form">
                        <?php echo $addresult; ?>
                        <form action="" method="post" id="contactFrm" name="contactFrm" enctype="multipart/form-data">
                            <label>Team Member</label>
                            <input type="text" required="" placeholder="Rebert John" value="" name="team_member" class="form-control">
                            <label>Customer Name</label>
                            <input type="text" required="" placeholder="Joe Smith" value="" name="customer_name" class="form-control">
                            <label>Address</label>
                            <input type="text" required="" placeholder="Street" value="" name="address" class="form-control">
                            <label>City</label>
                            <select name="city" class="form-control">
                                <option>Select City</option>
                                <?php
                                $getcity = "select * from areas_we_serve order by city";
                                $getcitys = $conn->query($getcity);
                                while ($cityname = $getcitys->fetch_assoc()) {
                                ?>
                                    <option value="<?php echo $cityname['city_id']; ?>"><?php echo $cityname['city']; ?></option>
                                <?php } ?>
                            </select>
                            <label>ST</label>
                            <select name="st" class="form-control">
                                <option>Select ST</option>
                                <?php
                                $getst = "select * from areas_we_serve group by state";
                                $getsts = $conn->query($getst);
                                while ($statename = $getsts->fetch_assoc()) {
                                ?>
                                    <option value="<?php echo $statename['state']; ?>"><?php echo $statename['state']; ?></option>
                                <?php } ?>
                            </select>
                            <label>Postal Code</label>
                            <input type="text" required="" placeholder="Postal" value="" name="postal_code" class="form-control">
                            <label>Photo</label>
                            <input type="file" required="" placeholder="" value="" name="photo" class="form-control">
                            <label>Description</label>
                            <textarea placeholder="Description" name="description" type="text" class="form-control"></textarea>
                            <input type="submit" value="Add Post" name="addpost" class="txt2">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'partials/footer.php'; ?>
    <!-- Scripts -->
    <script src="script.js"></script>

    </script>
</body>

</html>

<style>
    input.form-control {
        display: block;
        padding: 7px 15px 7px 15px;
        margin: 0 0 10px 0;
        width: 420px;
    }

    textarea.form-control {
        display: block;
        padding: 7px 15px 7px 15px;
        margin: 0 0 10px 0;
        width: 420px;
    }

    select.form-control {
        display: block;
        padding: 7px 15px 7px 15px;
        margin: 0 0 10px 0;
        width: 420px;
    }

    form_main {
        width: 100%;
    }

    .form_main h4 {
        font-family: roboto;
        font-size: 20px;
        font-weight: 300;
        margin-bottom: 15px;
        margin-top: 20px;
        text-transform: uppercase;
    }

    .heading {
        border-bottom: 1px solid #fcab0e;
        padding-bottom: 9px;
        position: relative;
    }

    .heading span {
        background: #9e6600 none repeat scroll 0 0;
        bottom: -2px;
        height: 3px;
        left: 0;
        position: absolute;
        width: 75px;
    }

    .form {
        border-radius: 7px;
        padding: 6px;
    }

    .txt[type="text"] {
        border: 1px solid #ccc;
        margin: 10px 0;
        padding: 10px 0 10px 5px;
        width: 100%;
    }

    .txt_3[type="text"] {
        margin: 10px 0 0;
        padding: 10px 0 10px 5px;
        width: 100%;
    }

    .txt2[type="submit"] {
        background: #242424 none repeat scroll 0 0;
        border: 1px solid #4f5c04;
        border-radius: 25px;
        color: #fff;
        font-size: 16px;
        font-style: normal;
        line-height: 35px;
        margin: 10px 0;
        padding: 0;
        text-transform: uppercase;
        width: 30%;
    }

    .txt2:hover {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        color: #5793ef;
        transition: all 0.5s ease 0s;
    }
</style>