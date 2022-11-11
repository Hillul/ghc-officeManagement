<?php 

session_start(); 
include "../db_conn.php";
$id=$_GET['id'];
$sql = "DELETE FROM officers WHERE id=$id";
if(mysqli_query($conn, $sql)){
    header("Location: ../home.php");
    exit();
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);