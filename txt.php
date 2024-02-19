<!DOCTYPE html>
<html>
    <head>
        <style>body { background-color: #efdecd; }</style>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="webstyling.css">
        <title>Make .txt File</title>
        <script src="//pull.cappuccicons.com/cpf.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="/jquery-ui.min.js"></script>
        <script>
        
        </script>
    </head>
    <body>
        <div class="container textbox">
            <form method="POST">
            <div><input type="text" name="txttitle"></div>
            <div><textarea id="txtinput" name="txtinput" rows="5" cols="33" style="border: 1px solid #eceaea; width: 500px; height: 200px; display: block; margin: 0 auto; font-family: 'Poppins';"></textarea></div>
            <input type="submit" name="Submit" value="Submit">
            </form>
        </div>
    </body>
</html>

<?php
if(isset($_POST['Submit'])) {
    $txttitle = $_POST['txttitle'];
    $txtinput = $_POST['txtinput'];
    $fp = fopen($txttitle . ".txt", "a+");
    fwrite($fp, $txtinput);
    fclose($fp);
}
?>
