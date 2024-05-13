<!DOCTYPE html>
<html>
    <head>
        <title>Shorties</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="webstyling.css">
        <link rel="stylesheet" href="shortsstyling.php" media="screen">
        <link rel="stylesheet" href="herstyling.php" media="screen">
        <script src="//pull.cappuccicons.com/cpf.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="/jquery-ui.min.js"></script>
        <script>
            $(document).ready(function() {
               $("#herstyling").click(function() {
                   $(this).next().toggle();
               }) 
            });
        </script>
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
        .sdatev, .sdateh {
            padding: 3px;
            text-align: right;
            font-size: 12px;
        }
        .sconv, .sconh {
            padding: 3px;
            text-align: justify;
        }
        #submitcont {
            text-align: center;
            margin-top: 30px;
        }
        .sconv img {
            max-width: 290px;
            height: fit-content;
        }
        .colourform div {
            padding: 3px;
            font-size: 13px;
            text-align: left;
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
                  echo "<div class='shorts'><div class='sconv'>" . nl2br($autolinked) . "</div><div class='sdatev'>" . $row["whensubmitted"] . "</div></div>";
                }elseif($row["whosubmitted"] == "Honey Pie") {
                  echo "<div class='shorts'><div class='sconh'>" . nl2br($autolinked) . "</div><div class='sdateh'>" . $row["whensubmitted"] . "</div></div>";
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
                    <?php include "shortiescoloursetup.php" ?>
            <a id="herstyling">Change Colours</a>
            <div class="colourform" style="display: none">
                <form action="colourform.php" method="POST" name="colours-form" accept-charset="UTF-8">
                    <div class="colourform">
                        <div><label for="hbgcolour">Background:</label>
                        <input type="color" id="hbgcolour" name="hbgcolour"></div>
                        <div><label for="htxtbg">Message Background:</label>
                        <input type="color" id="htxtbg" name="htxtbg"></div>
                        <div><label for="htxt">Text Colour:</label>
                        <input type="color" id="htxt" name="htxt"></div>
                        <div><label for="hdatebg">Date Background:</label>
                        <input type="color" id="hdatebg" name="hdatebg"></div>
                        <div><label for="hdate">Date Text Colour:</label>
                        <input type="color" id="hdate" name="hdate"></div>
                        <div><label for="htxtareabg">Textbox Background:</label>
                        <input type="color" id="htxtareabg" name="htxtareabg"></div>
                        <div><label for="htxtareaborder">Textbox Border:</label>
                        <input type="color" id="htxtareaborder" name="htxtareaborder"></div>
                        <div><label for="htxtareaborderw">Textbox Border Width:</label>
                        <input type="text" id="htxtareaborderw" name="htxtareaborderw" maxlength="3"></div>
                        <div><label for="hlink">Links (on your messages):</label>
                        <input type="color" id="hlink" name="hlink"></div>
                        <div><input type="submit" name="Submit" value="Submit"></div>
                    </div>
                </form>
                </div>
            </div>
    </body>
</html>