<?php

session_start();
ob_start();
$id=$_GET['RemoveAzienda'];
echo $id;

include './alert.php';

include './connessione.php';

$sql="DELETE FROM aziende WHERE id= $id";
 $res=mysqli_query($con,$sql);
if(!$res)
{
    die("Qery errata" . $sql);
    header("Location:./index.php "); 

}


else{
    header("Location:./index.php?AziendaCancellata=true ");

}

?>