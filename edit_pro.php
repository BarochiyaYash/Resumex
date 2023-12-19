<?php
session_start();
if ($_SESSION['u_name'] == null) {
    header('location:login.php');
}
if ($_SESSION['u_name']) {

    error_reporting(0);
    ?>
    <?php
    $con = mysqli_connect("localhost", "root", "", "resume");
    if (isset($_POST["Update"])) {

        $query = "update register set name='" . $_POST['full_name'] . "',gender='".$_POST['gender']."',mobile='".$_POST['mobile_number']."' where u_name='".$_SESSION['u_name']."'";


        $result = mysqli_query($con, $query);
        if ($result) {
            echo "<script>alert('inserted')</script>";
        } else {
            echo "<script>alert('something went wrong')</script>";
        }
    }
    header('location:account_edit.php');
?>
<?php
}
?>