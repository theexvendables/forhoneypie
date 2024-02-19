<?php
    date_default_timezone_set("Asia/Jakarta");
    $hour = date("G");
    if($hour >= 5 && $hour <= 11) {
        header("content-type: text/css");
        $bg = "#dfcbc4";
        $bodycolor = "#222";
        $navicolor = "#a58d8d";
        $accent1color = "#a58d8d";
        }else if($hour >= 12 && $hour <= 17) {
        header("content-type: text/css");
        $bg = "#dfcbc4";
        $bodycolor = "#222";
        $navicolor = "#a58d8d";
        $accent1color = "#a58d8d";
    }else if($hour >= 18 && $hour <= 21) {
        header("content-type: text/css");
        $bg = "#ae8b7f";
        $bodycolor = "#eceaea";
        $navicolor = "#876f68";
        $accent1color = "#66534d";
    }else if($hour >= 22 || $hour <= 4) {
        header("content-type: text/css");
        $bg = "#2b2b2b";
        $bodycolor = "#eceaea";
        $navicolor = "#1f1f1f";
        $accent1color = "#000";
    }
?>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@100;400;700&display=swap');
body {
    background-color: <?=$bg?>;
    font-family: "Lato", serif;
    font-size: 14px;
    text-align: justify;
    color: <?=$bodycolor?>;
}
a {
    cursor: pointer;
}
#bodycontainer {
    display: flex;
    position: relative;
    height: 100vw;
    gap: 10px;
}
.navbar {
    height: 100%;
    width: calc(100vw - 80%);
    background-color: <?=$navicolor?>;
}
.textcont {
    width: calc(100vw - 10%);
}
.thetext {
    border-bottom: 1px solid <?=$accent1color?>;
    padding: 10px;
}
