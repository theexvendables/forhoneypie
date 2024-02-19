<!DOCTYPE html>
<html>
    <head>
        <title>Shorties</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="webstyling.css">
        <link rel="stylesheet" type="text/css" href="webstyling.css">
        <script src="//pull.cappuccicons.com/cpf.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="/jquery-ui.min.js"></script>
        <style>
        .shortcontainer {
            display: flex;
            justify-content: space-evenly;
            align-items: end;
            flex-wrap: wrap;
            width: 1000px;
            margin: 20px auto;
            font-size: 13px;
            gap: 20px;
        }
        .shorts {
            width: 300px;
            height: auto;
        }
        .sdatev {
            background: #947171;
            color: #fff;
            padding: 3px;
            text-align: right;
            font-size: 12px;
        }
        .scon {
            background: #f4f4f4;
            color: #000;
            padding: 3px;
            text-align: justify;
        }
        .sdateh {
            background: #785978;
            color: #fff;
            padding: 3px;
            text-align: right;
            font-size: 12px;
        }
        #submitcont {
            text-align: center;
            margin-top: 30px;
        }
        </style>
    </head>
    <body>
        <div class="shortcontainer">
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
            </div>
            <div id="submitcont">
                <div class="container textbox">
                    <form action="shortiesform.php" method="POST" name="shorties-form">
                        <div><textarea id="scont" name="scont" rows="5" cols="33"></textarea></div>
                        <input type="submit" name="Submit" value="Submit">
                    </form>
                </div>
            </div>
    </body>
</html>
