<?php
$id = $_GET['id'];
include_once "connect_db.php";
$req = mysqli_query($conn, "DELETE FROM apprenant WHERE id = $id ");
    header("location:showuser.php?message=deletesucces");
    # code...






?>