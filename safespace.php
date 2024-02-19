<!DOCTYPE html>
<html>
    <head>
        <style>body { background-color: #efdecd; }</style>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="webstyling.css">
        <title>Safe Space</title>
        <script src="//pull.cappuccicons.com/cpf.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="/jquery-ui.min.js"></script>
    </head>
    <body>
        <div class="container">
            <?php
               date_default_timezone_set("Asia/Jakarta");
               $hour = date("G");
               if($hour >= 5 && $hour <= 11) {
                   echo "<div class='title' style='padding: 3px; margin-top: 15px;'>Good morning. In case I didn't see ya, good afternoon, good evening, and goodnight.</div>";
               }else if($hour >= 12 && $hour <= 17) {
                   echo "<div class='title' style='padding: 3px; margin-top: 15px;'>Good afternoon. In case I didn't see ya, good evening, goodnight, and good morning.</div>";
               }else if($hour >= 18 && $hour <= 21) {
                   echo "<div class='title' style='padding: 3px; margin-top: 15px;'>Good evening. In case I didn't see ya, goodnight, good morning, and good afternoon.</div>";
               }else if($hour >= 22 || $hour <= 4) {
                   echo "<div class='title' style='padding: 3px; margin-top: 15px;'>Goodnight. In case I didn't see ya, good morning, good afternoon, and good evening.</div><span class='teehee'>Anywho, please get some sleep.</span>";
               }
            ?>
            <img src="shrekwholesome.jpg" style="float: left; margin-right: 5px; border: 5px solid #8b6767; width: 350px">
            <?php 
            include "safespaceconnect.php";
            $data = mysqli_query($connect, "SELECT * from `response`");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            foreach ($rows as $row) {
                echo "<p>" . nl2br($row["myresponse"]) . "</p>";
            }
            ?>
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/0se4Vq1NigeLfnnd8xI91p?utm_source=generator" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe><audio controls><source src="howsyournight.mp3" type="audio/mpeg"></audio>
        </div>
        <div class="container textbox">
            <form action="safespaceform.php" method="POST" name="safe-space-form">
            <b>Which sentence suits your today's mood the most?</b>
            <div style="padding: 5px"><input type="radio" name="mydaytoday" id="amazingday" value="amazingday"><label for="amazingday">I have/had an amazing day today!</label></div>
            <div style="padding: 5px"><input type="radio" name="mydaytoday" id="goodday" value="goodday"><label for="goodday">I have/had a good day today.</label></div>
            <div style="padding: 5px"><input type="radio" name="mydaytoday" id="soso" value="soso"><label for="soso">Today's just like the other day.</label></div>
            <div style="padding: 5px"><input type="radio" name="mydaytoday" id="badday" value="badday"><label for="badday">I have/had a bad day today.</label></div>
            <div style="padding: 5px"><input type="radio" name="mydaytoday" id="horribleday" value="horribleday"><label for="horribleday">Today's horrible.</label></div>
            <b>Mind telling me about your day?</b>
            <div><textarea id="story" name="story" rows="5" cols="33" style="border: 1px solid #eceaea; width: 500px; height: 200px; display: block; margin: 0 auto; font-family: 'Poppins';"></textarea></div>
            <input type="submit" name="Submit" value="Submit">
            </form>
        </div>
    </body>
</html>
