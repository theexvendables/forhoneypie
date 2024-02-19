<?php
$servername = "localhost";
$dbuname = "id19601105_heavenly";
$dbpass = "Flv~^Z*{?1Xgr~=(";
$dbname = "id19601105_forhoneypie";
$connect = mysqli_connect($servername, $dbuname, $dbpass, $dbname);
if(mysqli_connect_errno()) {
    echo "Connection failed" . mysqli_connect_error();
}
?>
