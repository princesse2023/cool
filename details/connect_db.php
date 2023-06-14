<?php
    $host = "localhost";
    $username ="root";
    $password = "";
    $dbname ="mio";

    // create connexion
    $conn = mysqli_connect($host,$username, $password,$dbname);

    // CHECK CONNECTION
    if(!$conn){
      die("connection failed:".mysqli_connect_error());
    }
  ?>