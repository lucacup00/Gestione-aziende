<?php
include './connessione.php';


if($_SERVER['REQUEST_METHOD']=='POST'){
    $Username=mysqli_real_escape_string($con,$_POST['username']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $azienda=mysqli_real_escape_string($con,$_POST['azienda']);
    $ruolo=mysqli_real_escape_string($con,$_POST['ruolo']);
    
 
    echo $Username." ".$email." ".$password." ".$ruolo." ".$azienda;

    $sql="SELECT * FROM `utenti` WHERE `email`='$email'";
    
    $result=mysqli_query($con,$sql);
    $row=mysqli_num_rows($result);  //restituisce il numero di righe

    if($row>=1){


        header('Location:./index.php?UtenteEsist=true');
       
       
    }else {
        $newEncryptedPassword =password_hash($password,PASSWORD_BCRYPT); //FUNZIONE PER CRIPTARE LE PASSWORDs             

        echo $newEncryptedPassword;

        $sql1= "INSERT INTO `utenti`( `username`, `email`, `password`, `KsAziende`,`KsRuolo`)
        VALUES ('$Username','$email','$newEncryptedPassword','$azienda','$ruolo')";

        $result1=mysqli_query($con,$sql1); //query excution
    
        if($result1){
            header('Location:./index.php?NewUtente=true');
            
        }else{
            header('Location:./index.php?NoUtente=true');
            
        }
    }  
}

?>