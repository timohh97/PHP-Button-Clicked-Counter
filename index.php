<!DOCTYPE html>
<html>
    <head><meta charset="euc-jp">
        
        <title>Klick mich</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        
        <div id="divForButton">
        <form method="post" action="counter.php" enctype="multipart/form-data">
        <button type="submit">Klick mich an!</button>
        </form>
        </div>
        
        <div id="count">
                <?php
                $connection = new mysqli("localhost","timohh97_admin1","449060data","timohh97_button");
        
                $query = "SELECT * FROM counter";
        
                $result = mysqli_query($connection,$query);
                
        
               $row= mysqli_fetch_row($result);
               
               echo "<h1>Dieser Button wurde bis jetzt $row[1]-mal angeklickt!</h1>";
               ?>
                
            
        </div>
        
        
    </body>
</html>