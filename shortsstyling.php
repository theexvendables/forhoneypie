<?php
header("content-type: text/css");
include "safespaceconnect.php";
$data = mysqli_query($connect, "SELECT * from `colours`");
$rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
foreach ($rows as $row) {
    $ventxtbg = $row["ventxtbg"];
    $hertxtbg = $row["hertxtbg"];
    $ventxt = $row["ventxt"];
    $hertxt = $row["hertxt"];
    $ventagbg = $row["ventagbg"];
    $hertagbg = $row["hertagbg"];
    $ventag = $row["ventag"];
    $hertag = $row["hertag"];
    $venlink = $row["venlink"];
    $herlink = $row["herlink"];
}
?>
.sconv {
background: <?=$ventxtbg?>;
color: <?=$ventxt?>;
}

.sconh {
background: <?=$hertxtbg?>;
color: <?=$hertxt?>;
}

.sdatev { 
background: <?=$ventagbg?>; 
color: <?=$ventag?>;
}

.sdateh {
background: <?=$hertagbg?>;
color: <?=$hertag?>;
}

.sconv a {
color: <?=$venlink?>;
}

.sconh a {
color: <?=$herlink?>;
}