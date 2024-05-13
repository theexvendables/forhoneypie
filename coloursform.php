<?php
if(isset($_POST["Submit"])) {
    $vbgco = $_POST["vbgcolour"];
    $vtxtbgc = $_POST["vtxtbg"];
    $vtxtc = $_POST["vtxt"];
    $vdtbgc = $_POST["vdatebg"];
    $vdtc = $_POST["vdate"];
    $vtxtabgc = $_POST["vtxtareabg"];
    $vtxtabrc = $_POST["vtxtareaborder"];
    $vtxtabrw = $_POST["vtxtareaborderw"];
    $vurl = $_POST["vlink"];
    include "safespaceconnect.php";
    $mysql_input = mysqli_query($connect, "INSERT INTO `colours`(`venbg`, `ventxtbg`, `ventxt`, `ventagbg`, `ventag`, `ventxtareabg`, `ventxtareaborder`, `venborderwidth`, `venlink`) VALUES ('".$vbgco."','".$vtxtbgc."','".$vtxtc."','".$vdtbgc."','".$vdtc."','".$vtxtabgc."','".$vtxtabrc."','".$vtxtabrw."','".$vurl."')");
    if($mysql_input) {
        ?>
        <script>console.log("This is for debugging purpose: yay!"); document.location = "shorts.php";</script>
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