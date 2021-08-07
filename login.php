<?php
include './connessione.php';


if($_SERVER['REQUEST_METHOD']=='POST'){
    $Email=$_POST['EmailLogin'];
    $Password=$_POST['PasswordLogin'];


    $sql="SELECT * FROM `utenti` WHERE `email`='$Email'";
    $res=mysqli_query($con,$sql);  //esecuzione query
    
    $rows=mysqli_num_rows($res);  //restituisce il numero delle righe
    
    if($rows==1){
        $data=mysqli_fetch_assoc($res);
        $passwordFromDB=$data['password'];
        $passVerified=password_verify($Password,$passwordFromDB);
      
    
        if($passVerified){
            session_start();
            $_SESSION['idUtente']=$data['id'];
            $_SESSION['username']=$data['username'];
            $_SESSION['loggedIn']=true;
            header('Location:./index.php?Loggato=true');
         
        }else{
            echo 'Fallito';
        
        }
    }else{
        header('Location:./index.php?RegistratiPrima=true');
    }
    

}
?>
RegistratiPrima