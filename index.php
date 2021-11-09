<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Server List</title>
        <meta name="description" content="Minecraft Server List of Atropol.">
        <meta name="author" content="Pan_Okurka">

        <link rel="icon" href="./assets/atropol.png">
    </head>
    <body>

        <div class="centerpage">
    
            <div class="header">
                <div class="center">
                    <h1>Server List</h1>
                </div>
                <div class="center-img">
                    <img src="./assets/atropol.png" alt="atropol" class="img"/>
                    <h1>Atropol Hosting</h1>
                </div>
            </div>

            <div class="lists">
            <div class="list">
                <div class="top"> 
                    <h2>IP Adresa</h2>
                    <h2>Banner</h2>
                    <h2>Hráči</h2>
                    <h2>Status</h2>
                </div>

                <div class="servers">
                   <?php include 'servers.php';?>
                </div>
            </div>
            </div>

        </div>

        <div class="footer">
            <div class="center">
                <h3>&copy; 2021 <a href="https://atropol.net/">atropot.net</a></h3>
                <p>Made with <span class="red">&#9829;</span> by <a href="https://panokurka.github.io">Pan_Okurka</a></p>
            </div>
        </div>

    </body>
</html> 