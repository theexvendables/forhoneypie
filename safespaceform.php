<?php
date_default_timezone_set("Asia/Jakarta");
if(isset($_POST["Submit"])) {
    $daystc = $_POST["mydaytoday"];
    $daystory = $_POST["story"];
    $daysubmit = date("Y-m-d H:i:s");
    include "safespaceconnect.php";
    $content    = mysqli_real_escape_string($connect, $_POST['story']);
    $mysql_input = mysqli_query($connect, "INSERT INTO `howwasyourday`(`daystc`, `daystory`, `daysubmit`) VALUES ('".$daystc."','".$content."','".$daysubmit."')");
    if($mysql_input) {
        ?>
        <script>console.log("This is for debugging purpose: yay!"); document.location = "safespace.php";</script>
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
