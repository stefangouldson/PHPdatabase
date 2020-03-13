<?php 
require("./db.php");
require("./functions.php");


if (isset($_POST['submit'])){
    createUser();
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

<?php include './inc/nav.php'?>

<div class="jumbotron">
    <div class="container">
        <div class="col-xs-6">
            <h1>Sign Up Page</h1>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Submit"></input>
            </form>
        </div>

    </div>
</div>



</body>

</html>