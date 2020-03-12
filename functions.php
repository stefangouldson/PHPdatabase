<?php

require("./db.php");

function createUser(){
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $query = "INSERT INTO users(username,password) VALUES('$username', '$password')";
    $result = mysqli_query($connection, $query);
  
     if (!$result){
         die('Query Failed');
     }
}

function showAllData() {

    global $connection;

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed');
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}


function updateTable() {

    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET username='$username',password='$password' WHERE id = $id;";
    $res = mysqli_query($connection, $query);
    if (!$res) {
        die("Update Query Failed <br>" . mysqli_error($connection));
    }

}

function deleteRows() {
    global $connection;

    $id = $_POST['id'];

    $query = "DELETE FROM users WHERE users.id = $id";
    $res = mysqli_query($connection, $query);
    if (!$res) {
        die("Update Query Failed <br>" . mysqli_error($connection));
    }

}