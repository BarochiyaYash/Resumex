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
        <h3 class="card-title text-left mb-5">Login</h3>


        <!-- ##### Checkout Area Start ##### -->
        <div class="checkout_area section-padding-150">
          <div class="container">
            <div class="row">

              <div class="col-12 col-md-12">
                <div class="checkout_details_area mt-10 clearfix">
                  <form method="POST">
                    <?php
                    $uae ="";
                    session_start();
                    if (isset($_POST["ok"])) {
                      $con = mysqli_connect("localhost", "root", "", "resume");
                      $q = "select * from register where u_name = '" . $_POST['username'] . "' and password = '" . $_POST['password'] . "' ";
                      $r = mysqli_query($con, $q);
                      $count = mysqli_num_rows($r);
                      if ($count == 1) {
                        $_SESSION['u_name'] = $_POST['username'];
                        $_SESSION['password'] = $_POST['password'];
                        echo "<script>window.location='index.php'</script>";
                      } else {
                        $uae = "ID Password not matching";
                      }
                    }

                    ?>
                    <div class="row">
                      <div class="col-md-12 mb-12">
                        <label for="email_address">User Name<span>*</span></label>
                        <input type="text" class="form-control" name="username" placeholder="User Name" required>
                      </div>
                      <div class="col-12  mb-12">
                        <br>
                        <label for="email_address">Password <span>*</span></label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                      </div>
                      <div class="col-12">
                        <br>
                        <div class="custom-control custom-checkbox d-block mb-2">
                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                          <label class="custom-control-label" for="customCheck1" style="color:red"><?php echo $uae; ?></label>
                        </div>
                        <div class="custom-control custom-checkbox d-block mb-2">
                          <a href="signup.php"> Create an accout</a>
                        </div>
                        <br>
                        <center>
                          <div class="col-12  mb-12">
                            <input type="submit" class="btn essence-btn" id="customCheck2" value="Login" name="ok">
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