<?php
include "safespaceconnect.php";
$data = mysqli_query($connect, "SELECT * from `colours`");
mysqli_data_seek($data, mysqli_num_rows($data) - 1);
while($row = mysqli_fetch_array($data)) {
    $bgher = $row["herbg"];
    $txtbgher = $row["hertxtbg"];
    $txther = $row["hertxt"];
    $tagbgher = $row["hertagbg"];
    $tagher = $row["hertag"];
    $txtareabgher = $row["hertxtareabg"];
    $txtareaborderher = $row["hertxtareaborder"];
    $borderwidthher = $row["herborderwidth"];
    $linkher = $row["herlink"];
}
?>
<script>
    var herbg = <?=json_encode($bgher, JSON_UNESCAPED_UNICODE); ?>;
    var hertxtbg = <?=json_encode($txtbgher, JSON_UNESCAPED_UNICODE); ?>;
    var hertxt = <?=json_encode($txther, JSON_UNESCAPED_UNICODE); ?>;
    var hertagbg = <?=json_encode($tagbgher, JSON_UNESCAPED_UNICODE); ?>;
    var hertag = <?=json_encode($tagher, JSON_UNESCAPED_UNICODE); ?>;
    var hertxtareabg = <?=json_encode($txtareabgher, JSON_UNESCAPED_UNICODE); ?>;
    var hertxtareaborder = <?=json_encode($txtareaborderher, JSON_UNESCAPED_UNICODE); ?>;
    var hertxtborderwidth = <?=json_encode($borderwidthher, JSON_UNESCAPED_UNICODE); ?>;
    var herlink = <?=json_encode($linkher, JSON_UNESCAPED_UNICODE); ?>;
    $(document).ready(function() {
       $("#hbgcolour").attr("value", herbg);
       $("#htxtbg").attr("value", hertxtbg);
       $("#htxt").attr("value", hertxt);
       $("#hdatebg").attr("value", hertagbg);
       $("#hdate").attr("value", hertag);
       $("#htxtareabg").attr("value", hertxtareabg);
       $("#htxtareaborder").attr("value", hertxtareaborder);
       $("#htxtareaborderw").attr("value", hertxtborderwidth);
       $("#hlink").attr("value", herlink);
    });
</script>