<?php
$username="root";
$server="localhost";
$db_nome="TestAzienda";
$Password="";



$con=mysqli_connect($server,$username,$Password,$db_nome);

if(!$con){
    echo ' CONNESSIONE NON RIUSCITA';
}
?>