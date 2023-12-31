<?php
    session_start();
    if ($_SESSION['email'] == null)
    {
        header('location:login.php');
    }
    if($_SESSION['email'] ) {
        
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
        include("header.php")
        ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
        include("nav.php")
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">EDIT TEMPLATES</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">EDIT TEMPLATES</li>
                        </ol>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <?php

                                $con = mysqli_connect("localhost", "root", "", "resume");
                                $r = $_REQUEST['id'];

                                $q = "select * from template where id='$r'";
                                $re = mysqli_query($con, $q);

                                while ($row = mysqli_fetch_array($re)) {
                                ?>
                                    <form class="form-horizontal form-material" method="POST" action="update_tem.php" enctype="multipart/form-data">
                                        <input type="hidden" value='<?php echo $r ?>' name="idx">
                                        <div class="form-group">
                                            <label class="col-md-12">ID</label>
                                            <br>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="TEMPLATE ID" class="form-control form-control-line" name="t_id" value="<?php echo $row['temp_id'] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12">NAME</label>
                                            <br>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="TEMPLATE NAME" class="form-control form-control-line" name="t_name" value="<?php echo $row['temp_name'] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12">ABOUT TEMPLATE</label>
                                            <br>
                                            <div class="col-md-12">
                                                <textarea rows="3" class="form-control form-control-line" name="t_about"><?php echo $row['about_temp'] ?></textarea>
                                            </div>
                                        </div>


                                        <!-- <div class="form-group">
                                            <label class="col-md-12">Example IMAGE FILE</label>
                                            <br>
                                            <div class="col-md-12">
                                                <br>
                                                <img src="<?php echo $row['example_image'] ?>" style="width:250px;heigth:250px">
                                                <br>
                                                <br>
                                                <input type="file" class="form-control form-control-line" name="fileToUpload">
                                            </div>
                                        </div> -->

                                        <div class="form-group">
                                            <label class="col-md-12">Kit IMAGE FILE</label>
                                            <br>
                                            <div class="col-md-12">
                                                <br>
                                                <img src="<?php echo $row['kit_image'] ?>" style="width:250px;heigth:250px">
                                                <br>
                                                <br>

                                                <input type="file" class="form-control form-control-line" name="fileToUploadB">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12">Logic FILE</label>
                                            <br>
                                            <div class="col-md-12">
                                                <br>
                                                <a href="<?php  echo $row['logic_file'] ?>">GO TO FILE</a>
                                                <br>
                                                <br>

                                                <input type="file" class="form-control form-control-line" name="fileToUploadC">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="submit" class="btn btn-success" name="ok" value="UPDATE">
                                            </div>
                                        </div>


                                    </form>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
            include("footer.php");
            ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>
<?php
}	
?>