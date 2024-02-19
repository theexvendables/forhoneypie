<html>
    <head>
        <link rel="stylesheet" type="text/css" href="webstyling.css">
        <style>
        body { 
        margin: 0; 
        }
        .daycont {
        background: #f0f0f0;
        width: 600px;
        margin: 10px auto;
        padding: 10px;
        }
        .daystc {
        background: #795548;
        color: #fff;
        font-size: 13px;
        padding: 5px;
        text-transform: uppercase;
        font-weight: bold;
        }
        .daystory {
        font-size: 14px;
        text-align: justify;
        line-height: 160%;
        height: 250px;
        overflow-y: auto;
        }
        </style>
        <title>Your Messages</title>
    </head>
    <body>
        <table>
        <?php
            include "safespaceconnect.php";
            $data = mysqli_query($connect, "SELECT * from `howwasyourday`");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            foreach ($rows as $row) {
                echo "<div class='daycont'><div class='daystc'>" . $row["daystc"] . "</div>" . "<div class='daystory'>" . nl2br($row["daystory"]) . "</div></div>";
            }
            ?>
        </table>
    </body>
</html>
