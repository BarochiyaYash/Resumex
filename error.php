<?php
session_start();
if ($_SESSION['u_name'] == null) {
    header('location:login.php');
}
if ($_SESSION['u_name']) {

    error_reporting(0);
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <!-- Title  -->
        <title>Essence - Fashion Ecommerce Template</title>

        <!-- Favicon  -->
        <link rel="icon" href="img/core-img/favicon.ico">


        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Star Admin</title>
        <link rel="stylesheet" href="xother/node_modules/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="xother/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
        <link rel="stylesheet" href="xother/css/style.css" />
        <link rel="shortcut icon" href="xother/images/favicon.png" />
        <!-- MY CSS -->
        <link rel="stylesheet" href="xother/cxx.css">


        <!-- Core Style CSS -->
        <link rel="stylesheet" href="xother/csss/core-style.css">
        <link rel="stylesheet" href="xother/style.css">


    </head>

    <body>

        <div class="card col-lg-4 mx-auto">
            <!-- //new -->

            <div class="card-body px-6 py-6">
                <h2 class="card-title text-left mb-5">Something Went Wrong</h2>
                <a href="index.php"><button class="btn essence-btn">Go to Home Page</button></a>
                <!-- <input type="submit" class="btn essence-btn" id="customCheck2" value="Go to Home Page" href="index.php"> -->

            </div>
        </div>

        <br>
        <br>
        <br>

        <script src="xother/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="xother/node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="xother/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="xother/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
        <script src="xother/js/misc.js"></script>
        <!-- Google Maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
        <script src="xother/js/map-active.js"></script>

    </body>

    </html>
    <?php
}
?>