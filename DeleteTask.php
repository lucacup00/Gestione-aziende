<?php
include './connessione.php';
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id=$_GET['DeleteTask'];






$sql="DELETE FROM task WHERE id=$id";
$res=mysqli_query($con,$sql);

 
if(!$res)
 {
     die("Qery errata" . $sql);
     header("Location:./index.php "); 

 }


 else{
    header("Location:./index.php?TaskCancellato=true ");

 }

?>