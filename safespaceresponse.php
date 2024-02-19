<?php
if(isset($_POST["Submit"])) {
    $uresponse = $_POST["response"];
    $trtable = $_POST["trtb"];
    include "safespaceconnect.php";
    if($trtable == "yes") {
        $truntb = mysqli_query($connect, "TRUNCATE TABLE id19601105_forhoneypie.response");
    }
    $content    = mysqli_real_escape_string($connect, $_POST['response']);
    $mysql_input = mysqli_query($connect, "INSERT INTO `response`(`myresponse`) VALUES ('".$content."')");
    if($mysql_input) {
        ?>
        <script>console.log("This is for debugging purpose: yay!"); document.location = "safespace.php";</script>
        <?php
    }else{
        ?>
        <script>console.log("This is for debugging purpose: nay.");</script>
        <?php
        echo "Something went wrong! Please contact Paul.";
        echo $mysql_input;
        echo mysqli_error($connect);
    }
    mysqli_close($connect);
}
?>
