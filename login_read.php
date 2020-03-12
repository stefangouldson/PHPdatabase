<?php 
    require("./db.php");
    require("./functions.php");

    $query = "SELECT * FROM users";

   $result = mysqli_query($connection, $query);

   if (!$result){
       die('Query Failed');
   }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="col-xs-6">
            
        <?php 
        
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <pre>
            <?php
            print_r($row);
            ?>
            </pre>
            <?php
        }
        ?>
        </div>
    </div>
</body>

</html>