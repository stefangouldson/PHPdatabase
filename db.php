<?php 
/* //*Old way 
  // $connection = mysqli_connect('localhost', 'root','', 'loginapp');
  //   if(!$connection) {
  //       die("Database connection failed");
  //   }
*/
  //database details

  $host = 'localhost';
  $user = 'root';
  $password = '';
  $dbname = 'loginapp';
  
  //setup connection

  $dsn = 'mysql:host='. $host .'; dbname=' . $dbname;

  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

  if(!$pdo){
    die("connection error");
  }

  ?>