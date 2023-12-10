<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.php"><img src="img/logox.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="index.php">Home</a></li>

                    <li class="menu-has-children"><a style="color: white;">Templates</a>
                        <ul>
                            <li><a href="template.php">All Templates</a></li>
                            <li><a href="templateprofile.php">My Template Profile<sup>*</sup></a></li>
                        </ul>
                    </li>




                    <li class="menu-has-children"><a style="color: white;">OTHER</a>
                        <ul>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </li>
                    <?php
                    session_start();

                    if (!isset($_SESSION['u_name'])) {
                        $name = 'LOGIN';
                        $page = 'login.php';
                        ?>
                        <li class="menu-active"><a href="<?php echo $page; ?>">
                                <?php echo $name; ?>
                            </a></li>
                        <?php
                    }
                    ?>

                    <?php
                    if (isset($_SESSION['u_name'])) {
                        $name = 'LOGOUT';
                        $page = 'logout.php';
                        $login_user = $_SESSION['u_name'];
                        ?>

                        <li class="menu-has-children"><a style="color: white;"><?php  echo "Hey, "; echo $login_user ?></a>
                        <ul>
                        <li><a href="account.php">Account</a></li>
                            <li><a href="<?php echo $page; ?>"><?php echo $name; ?></a></li>
                        </ul>
                    </li>

                        <?php
                    }

                    error_reporting(0);
                    ?>


                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->