<?php
session_start();
$passx = 0;
if ($_REQUEST['pass'] == 1) {
    $passx = $_REQUEST['pass'];
}
if ($_SESSION['u_name'] == null || $passx != 1) {
    header('location:error.php');
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
                <h3 class="card-title text-left mb-5">Change Password</h3>
                <h6 class="card-title text-left mb-5">Enter New Password for you Resumex Account</h6>


                <!-- ##### Checkout Area Start ##### -->
                <div class="checkout_area section-padding-150">
                    <div class="container">
                        <div class="row">

                            <div class="col-12 col-md-12">
                                <div class="checkout_details_area mt-10 clearfix">
                                    <form method="POST">
                                        <?php
                                        $passnot = "";
                                        $r = $_REQUEST['pass'];
                                        session_start();
                                        if ($_POST['password'] == $_POST['passwordcon']) {
                                            if (isset($_POST["ok"]) && $r == 1) {
                                                $con = mysqli_connect("localhost", "root", "", "resume");
                                                $q = "update register set password='" . $_POST['password'] . "' where u_name='" . $_SESSION['u_name'] . "'";
                                                $r = mysqli_query($con, $q);
                                                if ($r == 1) {
                                                    echo "<script>window.location='logout.php'</script>";
                                                } else {
                                                    echo "<script>alert('Invalid user Name And Password')</script>";
                                                }
                                            }
                                        } else {
                                            $passnot = "passwords do not match";
                                        }
                                        ?>
                                        <div class="row">
                                            <div class="col-md-12 mb-12">
                                                <label for="email_address">New Password<span>*</span></label>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="New Password" Required>
                                            </div>
                                            <div class="col-12  mb-12">
                                                <br>
                                                <label for="email_address">Confirm Password<span>*</span></label>
                                                <input type="password" class="form-control" name="passwordcon"
                                                    placeholder="Confirm Password" Required>
                                                <br>
                                                <label>
                                                    <?php echo $passnot; ?>
                                                </label>
                                            </div>

                                            <div class="col-12">
                                                <br>
                                                <br>
                                                <center>
                                                    <div class="col-12  mb-12">
                                                        <input type="submit" class="btn essence-btn" id="customCheck2"
                                                            value="Verify and Next"
                                                            href="edittemplate.php?id=<?php echo $row['id'] ?>" name="ok">
                                                        <!-- <a href="#" name="ok"></a> -->
                                                    </div>
                                                </center>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ##### Checkout Area End ##### -->
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