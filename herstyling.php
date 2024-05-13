<?php
header("content-type: text/css");
include "safespaceconnect.php";
$data = mysqli_query($connect, "SELECT * from `colours`");
$rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
foreach ($rows as $row) {
    $herbg = $row["herbg"];
    $hertxtareabg = $row["hertxtareabg"];
    $hertxtareaborder = $row["hertxtareaborder"];
    $herborderwidth = $row["herborderwidth"];
}
?>
body {
background: <?=$herbg?>;
}

.container {
background: <?=$hertxtareabg?>;
border: <?=$herborderwidth?>px solid <?=$hertxtareaborder?>;
}