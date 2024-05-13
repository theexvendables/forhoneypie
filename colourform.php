<?php
if(isset($_POST["Submit"])) {
    $hbgco = $_POST["hbgcolour"];
    $htxtbgc = $_POST["htxtbg"];
    $htxtc = $_POST["htxt"];
    $hdtbgc = $_POST["hdatebg"];
    $hdtc = $_POST["hdate"];
    $htxtabgc = $_POST["htxtareabg"];
    $htxtabrc = $_POST["htxtareaborder"];
    $htxtabrw = $_POST["htxtareaborderw"];
    $hurl = $_POST["hlink"];
    include "safespaceconnect.php";
    $mysql_input = mysqli_query($connect, "INSERT INTO `colours`(`herbg`, `hertxtbg`, `hertxt`, `hertagbg`, `hertag`, `hertxtareabg`, `hertxtareaborder`, `herborderwidth`, `herlink`) VALUES ('".$hbgco."','".$htxtbgc."','".$htxtc."','".$hdtbgc."','".$hdtc."','".$htxtabgc."','".$htxtabrc."','".$htxtabrw."','".$hurl."')");
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