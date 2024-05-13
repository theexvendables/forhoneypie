<?php
include "safespaceconnect.php";
$data = mysqli_query($connect, "SELECT * from `colours`");
mysqli_data_seek($data, mysqli_num_rows($data) - 1);
while($row = mysqli_fetch_array($data)) {
    $bgven = $row["venbg"];
    $txtbgven = $row["ventxtbg"];
    $txtven = $row["ventxt"];
    $tagbgven = $row["ventagbg"];
    $tagven = $row["ventag"];
    $txtareabgven = $row["ventxtareabg"];
    $txtareaborderven = $row["ventxtareaborder"];
    $borderwidthven = $row["venborderwidth"];
    $linkven = $row["venlink"];
}
?>
<script>
    var venbg = <?=json_encode($bgven, JSON_UNESCAPED_UNICODE); ?>;
    var ventxtbg = <?=json_encode($txtbgven, JSON_UNESCAPED_UNICODE); ?>;
    var ventxt = <?=json_encode($txtven, JSON_UNESCAPED_UNICODE); ?>;
    var ventagbg = <?=json_encode($tagbgven, JSON_UNESCAPED_UNICODE); ?>;
    var ventag = <?=json_encode($tagven, JSON_UNESCAPED_UNICODE); ?>;
    var ventxtareabg = <?=json_encode($txtareabgven, JSON_UNESCAPED_UNICODE); ?>;
    var ventxtareaborder = <?=json_encode($txtareaborderven, JSON_UNESCAPED_UNICODE); ?>;
    var ventxtborderwidth = <?=json_encode($borderwidthven, JSON_UNESCAPED_UNICODE); ?>;
    var venlink = <?=json_encode($linkven, JSON_UNESCAPED_UNICODE); ?>;
    console.log(ventxtareabg);
    $(document).ready(function() {
       $("#vbgcolour").attr("value", venbg);
       $("#vtxtbg").attr("value", ventxtbg);
       $("#vtxt").attr("value", ventxt);
       $("#vdatebg").attr("value", ventagbg);
       $("#vdate").attr("value", ventag);
       $("#vtxtareabg").attr("value", ventxtareabg);
       $("#vtxtareaborder").attr("value", ventxtareaborder);
       $("#vtxtareaborderw").attr("value", ventxtborderwidth);
       $("#vlink").attr("value", venlink);
    });
</script>