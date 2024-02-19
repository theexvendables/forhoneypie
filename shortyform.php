<?php
date_default_timezone_set("Europe/London");
header('Content-type: text/html; charset=utf-8');
if(isset($_POST["Submit"])) {
    $short = $_POST["scont2"];
    $utfs = mb_convert_encoding($short, "utf-8");
    $whosubmit = "Ven";
    $daysubmit = date("Y-m-d H:i:s");
    include "safespaceconnect.php";
    $content = mysqli_real_escape_string($connect, $utfs);
    $mysql_input = mysqli_query($connect, "INSERT INTO `shorty`(`content`, `whosubmitted`, `whensubmitted`) VALUES ('".$content."','".$whosubmit."','".$daysubmit."')");
    if($mysql_input) {
        ?>
        <script>console.log("This is for debugging purpose: yay!"); document.location = "shorts.php";</script>
        <?php
    }else{
        ?>
        <script>console.log("This is for debugging purpose: nay.");</script>
        <?php
        echo "Something wrong with your coding dude lol";
    }
    mysqli_close($connect);
}
?>
