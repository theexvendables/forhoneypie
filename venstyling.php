<?php
header("content-type: text/css");
include "safespaceconnect.php";
$data = mysqli_query($connect, "SELECT * from `colours`");
$rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
foreach ($rows as $row) {
    $venbg = $row["venbg"];
    $ventxtareabg = $row["ventxtareabg"];
    $ventxtareaborder = $row["ventxtareaborder"];
    $venborderwidth = $row["venborderwidth"];
}
?>
body {
background: <?=$venbg?>;
}

.container {
background: <?=$ventxtareabg?>;
border: <?=$venborderwidth?>px solid <?=$ventxtareaborder?>;
}