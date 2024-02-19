<!DOCTYPE html>
<html>
    <head>
        <title>Mockup Design</title>
        <link rel="stylesheet" href="mockupstyle.php" media="screen">
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="/jquery-ui.min.js"></script>
    </head>
    <body>
        <div id="bodycontainer">
            <div class="navbar"></div>
            <div class="textcont">
                    <?php
                    include "lib_autolink.php";
                    include "safespaceconnect.php";
                    $data = mysqli_query($connect, "SELECT * from `shorty`");
                    $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
                    foreach ($rows as $row) {
                        $autolinked = autolink($row["content"], 100);
                        if (strlen($autolinked) > 1000) {
                        $maxLength = 999;
                        $autolinkedsub = substr($autolinked, 0, $maxLength);
                        echo "<div class='name'>" . $row["whosubmitted"] . "</div><div class='date'>" . $row["whensubmitted"] . "</div><div class='textmin'>" . $autolinkedsub . "</div><a class='readmore'>Read more</a><a class='readless' style='display: none'>Read less</a>";
                    ?>
                    <script>$(document).ready(function() {
                        $(".thetext .readmore").click(function() {
                            $(this).prev().text("<?=$autolinked?>");
                            $(this).css({"display": "none"});
                            $(this).next().css({"display": "block"});
                        });
                        $(".thetext .readless").click(function() {
                            $(this).prev().prev().text("<?=$autolinkedsub?>");
                            $(this).css({"display": "none"});
                            $(this).prev().css({"display": "block"});
                        });
                    });</script>
                    <?php
                        } else {
                            echo "<div class='name'>" . $row["whosubmitted"] . "</div><div class='date'>" . $row["whensubmitted"] . "</div><div class='thetext'>" . $autolinked . "</div>";
                        }
                    }
                    ?>
            </div>
        </div>
    </body>
</html>
