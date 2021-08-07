<?php
include './connessione.php';


if($_SERVER['REQUEST_METHOD']=='POST'){
    $Azienda=mysqli_real_escape_string($con,$_POST['azienda']);
    $indirizzo=mysqli_real_escape_string($con,$_POST['indirizzo']);
    $settore=mysqli_real_escape_string($con,$_POST['settore']);
   
 
    

    $sql="SELECT * FROM `aziende` WHERE `Azienda`='$Azienda'"; //verificare se l'azienda è già registarta
    
    $result=mysqli_query($con,$sql);
    $row=mysqli_num_rows($result);  //restituisce il numero di righe

    if($row>=1){

        header('Location:./index.php?AziendaEsist=true');

    }else {
        

        $sql1= "INSERT INTO `aziende`( `Azienda`, `indirizzo`, `KsSettori` )
        VALUES ('$Azienda','$indirizzo','$settore')";
        $result1=mysqli_query($con,$sql1); //query excution
    
        if($result1){
            header('Location:./index.php?Registrazione=true');
        }else{
            header('Location:./index.php?RegistrazioneNo=true');
        }
    }  
}

?>