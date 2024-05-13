<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="webstyling.css">
        <link rel="stylesheet" href="shortsstyling.php" media="screen">
        <link rel="stylesheet" href="venstyling.php" media="screen">
        <title>Shorties!</title>
        <script src="//pull.cappuccicons.com/cpf.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="/jquery-ui.min.js"></script>
        <script>
            $(document).ready(function() {
               $("#venstyling").click(function() {
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
        <div class="container textbox">
            <form action="shortyform.php" method="POST" name="shorty-form" accept-charset="UTF-8">
            <div><textarea id="scont2" name="scont2" rows="5" cols="33" style="border: 1px solid #eceaea; width: 500px; height: 200px; display: block; margin: 0 auto; font-family: 'Poppins';"></textarea></div>
            <div style="text-align: center; padding: 5px"><input type="submit" name="Submit" value="Submit"></div>
            </form>
            <?php include "shortscoloursetup.php" ?>
            <a id="venstyling">Change Colours</a>
            <div class="colourform" style="display: none">
                <form action="coloursform.php" method="POST" name="colours-form" accept-charset="UTF-8">
                    <div class="colourform">
                        <div><label for="vbgcolour">Background:</label>
                        <input type="color" id="vbgcolour" name="vbgcolour"></div>
                        <div><label for="vtxtbg">Message Background:</label>
                        <input type="color" id="vtxtbg" name="vtxtbg"></div>
                        <div><label for="vtxt">Text Colour:</label>
                        <input type="color" id="vtxt" name="vtxt"></div>
                        <div><label for="vdatebg">Date Background:</label>
                        <input type="color" id="vdatebg" name="vdatebg"></div>
                        <div><label for="vdate">Date Text Colour:</label>
                        <input type="color" id="vdate" name="vdate"></div>
                        <div><label for="vtxtareabg">Textbox Background:</label>
                        <input type="color" id="vtxtareabg" name="vtxtareabg"></div>
                        <div><label for="vtxtareaborder">Textbox Border:</label>
                        <input type="color" id="vtxtareaborder" name="vtxtareaborder"></div>
                        <div><label for="vtxtareaborderw">Textbox Border Width:</label>
                        <input type="text" id="vtxtareaborderw" name="vtxtareaborderw" maxlength="3"></div>
                        <div><label for="vlink">Links (on your messages):</label>
                        <input type="color" id="vlink" name="vlink"></div>
                        <div><input type="submit" name="Submit" value="Submit"></div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>