<?php
include "safespaceconnect.php";
$data = mysqli_query($connect, "SELECT * from `howwasyourday`");
$rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
foreach ($rows as $row) {
    echo $row["daystc"] . "<br>" . nl2br($row["daystory"]) . "<br>" . $row["daysubmit"] . "<br><br>";
}
?>
