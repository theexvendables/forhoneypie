<?php
include "lib_autolink.php";
include "safespaceconnect.php";
$data = mysqli_query($connect, "SELECT * from `shorty`");
$rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
foreach ($rows as $row) {
$autolinked = autolink($row["content"], 25);
if($row["whosubmitted"] == "Ven") {
echo "<div class='shorts'><div class='scon'>" . nl2br($autolinked) . "</div><div class='sdatev'>" . $row["whensubmitted"] . "</div></div>";
}elseif($row["whosubmitted"] == "Honey Pie") {
echo "<div class='shorts'><div class='scon'>" . nl2br($autolinked) . "</div><div class='sdateh'>" . $row["whensubmitted"] . "</div></div>";
}
}
?>
