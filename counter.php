<?php
                $connection = new mysqli("localhost","timohh97_admin1","449060data","timohh97_button");
        
                $query = "SELECT * FROM counter";
        
                $result = mysqli_query($connection,$query);
                
        
               $row= mysqli_fetch_row($result);
               
               $count = $row[1]+1;
               
               $one = 1;
               
               $query = "UPDATE counter SET counter = $count WHERE id= $one";

               mysqli_query($connection,$query);
               
               echo "<script>window.location='..'</script>";
               
?>