<?php require("./db.php");

function createUser(){
    require("./db.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    //TODO up to date version of escape string
    // // $username = mysqli_real_escape_string($connection, $username);
    // //$password = mysqli_real_escape_string($connection,$password);

    $password = password_hash($password,PASSWORD_DEFAULT);
  
    //*Old way
    //// $query = "INSERT INTO users(username,password) VALUES('$username', '$password')";
    //// $result = mysqli_query($connection, $query);

    $stmt = $pdo->prepare('SELECT * from users WHERE username = ?');
    $stmt->execute([$username]);
    $totalUsers = $stmt->rowCount(); 
  
     if ($totalUsers > 0){
        die("Username taken, please enter another <br> <a href=login.php>go back</a><br>");
        
     } else {
        $query = "INSERT INTO users(username,password) VALUES(?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $password]);
        echo "successfully added";
     }
}

function showAllData() {

    require("./db.php");    

    $query = "SELECT * FROM users";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $users = $stmt->fetchAll();

    if (!$users) {
        die('Query Failed');
    }

    foreach($users as $user) {
        $id = $user->id;
        echo "<option value='$id'>$id</option>";
    }
}


function updateTable() {
    require("./db.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $password = password_hash($password,PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("UPDATE users SET username='$username',password='$password' WHERE id = $id;");
    $stmt->execute();

}

function deleteRows() {
    require('./db.php');
    $id = $_POST['id'];

    $query = "DELETE FROM users WHERE users.id = $id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

}