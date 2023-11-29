<?php
    session_start();
    if ($_SESSION['u_name'] == null)
    {
        header('location:login.php');
    }
    if($_SESSION['u_name'] ) {
        
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Book</title>

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


    <!-- Start about Area -->
    <section class="section-gap info-area" id="about">
        <div class="container">
            <div class="single-info row mt-40 align-items-center">
                <div class="col-lg-12 col-md-12 no-padding info-rigth">
                    <div class="info-content">
                        <h2 class="pb-30">Account & Settings</h2><!-- Template Name -->
                        <div class="">
                            <div class="single-footer-widgetx">

                            

                                    <form action="upload.php" method="POST" enctype="multipart/form-data">
                                        <br>
                                        <h3 class="pb-30">About you</h3>

                                        <label class="formlable">Your Photo <b>(Photo Must be a in .PNG and size need (900 width x 1080 height) Pixel)<sup>*</sup></b></label>
                                        <br>
                                        <img src=""  class="form-control" style="width:250px;heigth:250px" >
                                        <br>
                                        <input type="file" class="form-control" name="fileToUpload" value="">

                                        <br>
                                        <label class="formlable">Full Name</label>
                                        <input type="text" class="form-control" name="full_name" placeholder="e.g. Elon Musk" value="" required>

                                        <br>

                                        <label class="formlable">Expert</label>
                                        <input type="text" class="form-control" name="expert" placeholder="e.g. Full stack developer" value="" required>

                                        <br>


                                        <label class="formlable">About Me</label>

                                        <textarea class="form-control" name="about_me" placeholder="An engineer or developer who works on both the front end (client-side) and the back end (server-side) of a website or application is called a full-stack developer. They may handle projects involving databases, APIs, or designing user-facing websites, as well as interacting with clients during development." ></textarea required>

                                        <br>

                                        <label class="formlable">Languages</label>
                                        <input type="text" class="form-control" name="lA" placeholder="English" value="" required>
                                        <br>
                                        <input type="text" class="form-control" name="lB" placeholder="Russian" value="" required>
                                        <br>
                                        <input type="text" class="form-control" name="lC" placeholder="Hindi" value="" required>

                                        <br>
                                        <br>
                                        <br>

                                        <h3 class="pb-30">Contact Info</h3>

                                        <label class="formlable">Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="New Your, USA." value="" required>
                                        <br>
                                        <label class="formlable">Phone</label>
                                        <input type="text" class="form-control" name="phone" placeholder="+1 36595 26544" value="" required>
                                        <br>
                                        <label class="formlable">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="elonmusk@gmail.com" value="" required>

                                        <br>
                                        <br>
                                        <br>

                                        <h3 class="pb-30">Education Info</h3>


                                        <label class="formlable">Institute Name</label>
                                        <input type="text" class="form-control" name="in_A" placeholder="Princeton University" value="" required>
                                        <br>
                                        <label class="formlable">Year</label>
                                        <input type="text" class="form-control" name="iy_A" placeholder="2018 - 2021" value="" required>

                                        <br>
                                        <br>

                                        <label class="formlable">Institute Name</label>
                                        <input type="text" class="form-control" name="in_B" placeholder="Harvard University" value="" required>
                                        <br>
                                        <label class="formlable">year</label>
                                        <input type="text" class="form-control" name="iy_B" placeholder="2021 - 2023" value="" required>





                                        <br>
                                        <br>
                                        <br>

                                        <h3 class="pb-30">Experience Info</h3>


                                        <label class="formlable">year</label>
                                        <input type="text" class="form-control" name="exp_year_A" placeholder="2021 - 2023" value="" required>
                                        <br>
                                        <label class="formlable">Title</label>
                                        <input type="text" class="form-control" name="exp_title_A" placeholder="IOS Devloper in Microsoft OR College Resume Buidel Web Project" value="" required>
                                        <br>
                                        <label class="formlable">About</label>
                                        <textarea class="form-control" name="exp_A" placeholder="An engineer or developer who works on both the front end (client-side) and the back end (server-side) of a website or application is called a full-stack developer. They may handle projects involving databases, APIs, or designing user-facing websites, as well as interacting with clients during development." > </textarea required>

                                        <br>
                                        <br>
                                        <br>

                                        <label class="formlable">year</label>
                                        <input type="text" class="form-control" name="exp_year_B" placeholder="2021 - 2023" value="" required>
                                        <br>
                                        <label class="formlable">Title</label>
                                        <input type="text" class="form-control" name="exp_title_B" placeholder="Web Devloper in Webx OR College Shoping App in IOS" value="" required>
                                        <br>
                                        <label class="formlable">About</label>
                                        <textarea class="form-control" name="exp_B" placeholder="An engineer or developer who works on both the front end (client-side) and the back end (server-side) of a website or application is called a full-stack developer. They may handle projects involving databases, APIs, or designing user-facing websites, as well as interacting with clients during development." > </textarea required>


                                        <br>
                                        <br>
                                        <br>

                                        <h3 class="pb-30">Skills</h3>




                                        <label class="formlable">Skill 1</label>
                                        <input type="text" class="form-control" name="skill_A" placeholder="Designing" value="" required>
                                        <br>
                                        <label class="formlable">Skill 2</label>
                                        <input type="text" class="form-control" name="skill_B" placeholder="Public speaking" value="" required>
                                        <br>
                                        <label class="formlable">Skill 3</label>
                                        <input type="text" class="form-control" name="skill_C" placeholder="Problem solving" value="" required>
                                        <br>
                                        <label class="formlable">Skill 4</label>
                                        <input type="text" class="form-control" name="skill_D" placeholder="MS office " value="" required>
                                        <br>
                                        <label class="formlable">Skill 5</label>
                                        <input type="text" class="form-control" name="skill_E" placeholder="Flutter" value="" required>

                                        <br>
                                        <br>


                                        <input type="submit" value="UPDATE" class="click-btn btn btn-default" name="ok">




                                    </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>






        </div>
        </div>
    </section>


    <?php include('footer.php') ?>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
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