<?php
date_default_timezone_set("Asia/Jakarta");
if(isset($_POST["Submit"])) {
    $short = $_POST["scont"];
    $whosubmit = "Honey Pie";
    $daysubmit = date("Y-m-d H:i:s");
    include "safespaceconnect.php";
    $content    = mysqli_real_escape_string($connect, $_POST['scont']);
    $mysql_input = mysqli_query($connect, "INSERT INTO `shorty`(`content`, `whosubmitted`, `whensubmitted`) VALUES ('".$content."','".$whosubmit."','".$daysubmit."')");
    if($mysql_input) {
        ?>
        <script>console.log("This is for debugging purpose: yay!"); document.location = "shorties.php";</script>
        <?php
    }else{
        ?>
        <script>console.log("This is for debugging purpose: nay.");</script>
        <?php
        echo "Something went wrong! Please contact Paul.";
    }
    mysqli_close($connect);
}
?>
