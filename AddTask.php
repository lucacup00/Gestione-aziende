<?php
session_start();
include './modal.php'; 
include './links.php';
include './connessione.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER['REQUEST_METHOD']=='POST'){
    $titolo=mysqli_real_escape_string($con,$_POST['title']);
    $descrizione=mysqli_real_escape_string($con,$_POST['descrizione']);
    $operatore=mysqli_real_escape_string($con,$_POST['operatore']);
    $stato=mysqli_real_escape_string($con,$_POST['stato']);
    $username=$_SESSION['username'];
    $idUtente=$_SESSION['idUtente'];


    if(!$operatore){
        $operatore=$username;
    }

    $sql="INSERT INTO `task`( `titolo`, `descrizione`, `datas`, `KsUtenti`, `KsStato`)
    VALUES ('$titolo','$descrizione',CURRENT_TIMESTAMP(),$idUtente,$stato)";


    $result=mysqli_query($con,$sql);

    if($result){

        ?>
  <script>
  
      window.location = "./index.php";
      alert('Task inserito correttamente');

  </script>
       <?php 
    }
}
?>