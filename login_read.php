<?php 
    require("./db.php");
    require("./functions.php");

//     $query = "SELECT * FROM users";

//    $result = mysqli_query($connection, $query);

//    if (!$result){
//        die('Query Failed');
//    }

    $stmt = $pdo->prepare('SELECT * FROM users');
    $stmt->execute();
    $users = $stmt->fetchAll();

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

<?php include './inc/nav.php'?>

    <div class="container">
        <div class="col-xs-6">
            <div class="jumbotron">
                <h2>This is a list of all the usernames</h2>
            </div>
        <ul>    
            <?php foreach($users as $user){?>
            <h4>Username: <?php echo $user->username;}?></h4>
        </ul>
        </div>
    </div>
</body>

</html>