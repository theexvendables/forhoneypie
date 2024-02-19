<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;700&display=swap');
            body {
                margin: 0;
            }
            #container {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .imgs {
                background: url("meows.png");
                height: 500px;
                width: 500px;
            }
            .title {
                font-size: 25px;
                font-family: "Quicksand";
                font-weight: bold;
            }
            .clickclick {
                display: flex;
                gap: 10px;
                justify-content: center;
            }
            .subtitle a {
                font-family: "Poppins";
            }
        </style>
    </head>
    <body>
        <div id="container">
            <div class="imgs"></div>
            <div class="contents">
                <div class="title">Where shall I take you, princess?</div>
                <div class="clickclick">
                    <div class="subtitle"><a href="/safespace.php">Safe Space</a></div>
                    <div class="subtitle"><a href="/shorties.php">Shorties</a></div>
                </div>
            </div>
        </div>
    </body>
</html>
