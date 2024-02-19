<!DOCTYPE html>
<html>
    <head>
        <style>body { background-color: #efdecd; }</style>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="webstyling.css">
        <title>Responding...</title>
        <script src="//pull.cappuccicons.com/cpf.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="/jquery-ui.min.js"></script>
        <script>
        
        </script>
    </head>
    <body>
        <div class="container textbox">
            <form action="safespaceresponse.php" method="POST" name="safe-space-response">
            <div><textarea id="response" name="response" rows="5" cols="33" style="border: 1px solid #eceaea; width: 500px; height: 200px; display: block; margin: 0 auto; font-family: 'Poppins';"></textarea></div>
            <div style="padding: 5px"><input type="radio" name="trtb" id="yes" value="yes"><label for="yes">Truncate Previous Table</label></div>
            <input type="submit" name="Submit" value="Submit">
            </form>
        </div>
    </body>
</html>
