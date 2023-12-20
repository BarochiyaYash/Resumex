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

  <div class="card col-lg-5 mx-auto">
    <!-- //new -->

    <div class="card-body px-6 py-6">
      <h3 class="card-title text-left mb-5">Signup</h3>


      <!-- ##### Checkout Area Start ##### -->
      <div class="checkout_area section-padding-150">
        <div class="container">
          <div class="row">

            <div class="col-12 col-md-12">
              <div class="checkout_details_area mt-10 clearfix">
                <form method="POST">
                  <?php

                  error_reporting(0);
                  $con = mysqli_connect("localhost", "root", "", "resume");
                  if (isset($_POST["ok"])) {
                    $number = 1;
                    $queryX = "select * from register";
                    $res = mysqli_query($con, $queryX);
                    while ($row = mysqli_fetch_array($res))

                      if ($res) {
                        if ($row['u_name'] == $_POST['username']) {
                          $uae = "You are Not Signup <br> *User another User Name This is already exists";
                          $number = 1;
                        } else {
                          $number = 0;
                        }
                      }
                  }
                  if ($number != 1 && $_POST['name'] && $_POST['username']) {

                    echo "<script>window.location = 'welcome.php'</script>";
                    $query = "insert into register(id,name,u_name,email,gender,mobile,password)values('NULL','" . $_POST['name'] . "','" . $_POST['username'] . "','" . $_POST['email'] . "','" . $_POST['gender'] . "','" . $_POST['mobile'] . "','" . $_POST['password'] . "')";

                    $result = mysqli_query($con, $query);
                    // if($result)
                    // {
                    // 	echo "<script>alert('inserted')</script>";
                    // }
                    // else{
                    // 	echo "<script>alert('something went wrong')</script>";
                    // }
                  
                    $queryA = "insert into resume_data(full_name,email,phone,user_id)values('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['mobile'] . "','" . $_POST['username'] . "')";



                    $resultA = mysqli_query($con, $queryA);
                    if ($resultA) {
                      echo "<script>window.location='login.php'</script>";
                      // echo "<script>alert('inserted')</script>";
                    } else {
                      echo "<script>alert('something went wrong')</script>";
                    }




                    $queryB = "update resume_data set image='uploads/example.png',full_name='" . $_POST['name'] . "',expert='Web Developer',about='Explain Your self in Sort',lA='Gujarati',lB='Hindi',lC='English',address='Rajkot, India',phone='" . $_POST['mobile'] . "',email='" . $_POST['email'] . "',eduA='Enducation ONE',yearA='2020 - 2023',eduB='Education TWO',yearB='2020 - 2023',expeyearA='2020',expetitleA='Software Developer',expeA='Explain Sort',expeyearB='2020', expetitleB='Software Developer',expeB='Explain Sort',skillA='HTML',skillB='CSS',skillC='JS',skillD='PHP',skillE='SQL' where user_id='" . $_POST['username'] . "'";
                    $resultB = mysqli_query($con, $queryB);
                    if ($resultB) {
                      echo "<script>window.location='login.php'</script>";
                      // echo "<script>alert('inserted')</script>";
                    } else {
                      echo "<script>alert('something went wrong')</script>";
                    }
                  }
                  echo $queryA;
                  ?>
                  <div class="row">


                    <div class="col-12  mb-12">
                      <br>
                      <label for="email_address">Full Name<span>*</span></label>
                      <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                    </div>

                    <div class="col-md-12 mb-12">
                      <br>
                      <label for="email_address">User Name<span>*</span></label>
                      <input type="text" class="form-control" name="username" placeholder="User Name" required>
                    </div>

                    <div class="col-12  mb-12">
                      <br>


                      <label for="email_address">Gender<span>*</span></label>

                      <select class="form-control" name="g_select" required>
                        <option select hidden>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>
                      <br>
                    </div>

                    <div class="col-12  mb-12">
                      <br>
                      <label for="email_address">Email<span>*</span></label>
                      <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <div class="col-12  mb-12">
                      <br>
                      <label for="email_address">Password <span>*</span></label>
                      <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>

                    <div class="col-12  mb-12">
                      <br>
                      <label for="email_address">Conform Password <span>*</span></label>
                      <input type="password" class="form-control" name="password" placeholder="Conform Password"
                        required>
                    </div>
                    <div class="col-12  mb-12">
                      <br>
                      <label for="email_address" style="color: red;"><?php echo $uae; ?></label>
                    </div>

                    <div class="col-12">
                      <br>


                      <center>
                        <div class="col-12  mb-12">
                          <input type="submit" class="btn essence-btn" id="customCheck2" value="Sign Up" name="ok">
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