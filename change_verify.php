<?php
session_start();
if ($_SESSION['u_name'] == null) {
    header('location:login.php');
}
if ($_SESSION['u_name']) {

    // error_reporting(0);
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <!-- Title  -->
        <title>Change Password</title>

        <!-- Favicon  -->
        <link rel="icon" href="img/core-img/favicon.ico">


        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                <h6 class="card-title text-left mb-5">Need to verify your ID and Old Password</h6>


                <!-- ##### Checkout Area Start ##### -->
                <div class="checkout_area section-padding-150">
                    <div class="container">
                        <div class="row">

                            <div class="col-12 col-md-12">
                                <div class="checkout_details_area mt-10 clearfix">
                                    <form method="POST">
                                        <?php
                                    
                                        if (isset($_POST["ok"])) {
                                            $cp = $_SESSION['u_name'];
                                            if ($cp == $_POST['username']) {
                                                $con = mysqli_connect("localhost", "root", "", "resume");
                                                $q = "select * from register where u_name = '" . $_POST['username'] . "' and password = '" . $_POST['password'] . "' ";
                                                $r = mysqli_query($con, $q);
                                                $count = mysqli_num_rows($r);
                                                if ($count == 1) {
                                                    
                                                    echo "<script>window.location = 'change_password.php?pass=1'</script>";
                                                } else {
                                                    echo "<script>alert('Invalid user Name And Password')</script>";
                                                }
                                            }
                                        }
                                        ?>
                                        <div class="row">
                                            <div class="col-md-12 mb-12">
                                                <label for="email_address">User Name<span>*</span></label>
                                                <input type="text" class="form-control" name="username"
                                                    placeholder="User Name" Required>
                                            </div>
                                            <div class="col-12  mb-12">
                                                <br>
                                                <label for="email_address">Password <span>*</span></label>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Old Password" Required>
                                            </div>
                                            <div class="col-12">
                                                <br>
                                                <br>
                                                <center>
                                                    <div class="col-12  mb-12">
                                                        <input type="submit" class="btn essence-btn" value="Verify and Next" name="ok">
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