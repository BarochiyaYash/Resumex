<?php
session_start();
if ($_SESSION['u_name'] == null) {
    header('location:login.php');
}
if ($_SESSION['u_name']) {

    error_reporting(0);
    ?>
    <!DOCTYPE html>
    <html lang="zxx" class="no-js">

    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.ico">
        <!-- Author Meta -->
        <meta name="author" content="codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Resumex</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
            CSS
            ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>

        <?php include('header.php') ?>

        <section class="price-area section-gap" id="price">
            <div class="container">

                <?php
                include('pro_nav.php');
                ?>
                <br>
                <div class="col-lg-12">
                    <div class="single-price no-padding">
                        <div class="price-top">
                            <h4>Profile</h4>
                        </div>



                        <div class="price-bottom">
                            <div class="col-md-12 mt-sm-30" style=" text-align: left;">
                                <section id="about">
                                    <div class="container">
                                        <div class="single-info row mt-40 align-items-center">
                                            <div class="col-lg-12 col-md-12 no-padding info-rigth">
                                                <div class="info-content">
                                                    <!-- Template Name -->
                                                    <div class="">
                                                        <div class="single-footer-widgetx">
                                                            <?php
                                                            $con = mysqli_connect("localhost", "root", "", "resume");
                                                            $query = "select * from register where u_name='" . $_SESSION['u_name'] . "'";
                                                            $res = mysqli_query($con, $query);
                                                            while ($row = mysqli_fetch_array($res)) {
                                                                ?>

                                                                <form action="edit_pro.php" method="POST">
                                                                    <br>
                                                                    <br>
                                                                    <label class="formlable">Full Name</label>
                                                                    <input type="text" class="form-control" name="full_name"
                                                                        value="<?php echo $row['name'] ?>">
                                                                    <br>
                                                                    <label class="formlable">Gender</label>
                                                                    <input type="text" class="form-control" name="gender"
                                                                        value="<?php echo $row['gender'] ?>">
                                                                    <br>
                                                                    <label class="formlable">Mobile Number</label>
                                                                    <input type="text" class="form-control" name="mobile_number"
                                                                        value="<?php echo $row['mobile'] ?>">
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    <input type="submit" value="Update" name="Update"
                                                                        class="click-btn btn btn-default" />
                                                                </form>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
        <!-- Start about Area -->



        <?php include('footer.php') ?>

        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="js/easing.min.js"></script>
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/main.js"></script>
    </body>

    </html>
    <?php
}
?>