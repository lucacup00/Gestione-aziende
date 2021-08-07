<?php
session_start();
include './modal.php'; 
include './links.php';
include './connessione.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Test azienda</title>
  </head>
  <body>
 <?php
 include './Nav.php';

 include './alert.php';
 $username=$_SESSION['username'];
 $idUtente=$_SESSION['idUtente'];
 

 if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){

        $sql="SELECT * 
        FROM utenti Where username='$username'";
        $res=mysqli_query($con,$sql);

        

        

        $data=mysqli_fetch_assoc($res);
        $IdRuolo=$data['KsRuolo'];

        echo $IdRuolo;
        
        

      

            if($IdRuolo==1){

                //sei loggato come amministratore
                

                    echo'<h2>Benvenuto nel pannello amministratore</h2>';

                    $sqlA="SELECT aziende.id,Azienda,indirizzo,settori FROM aziende,settori where aziende.KsSettori=settori.id";
                    $resA=mysqli_query($con,$sqlA);
                    echo'<h3>Elenco delle aziende registrate</h3>';
                    while($dataFetchedA=mysqli_fetch_assoc($resA)){
                    
                        $id=$dataFetchedA['id'];
                        $Azienda=$dataFetchedA['Azienda'];
                        $indirizzo=$dataFetchedA['indirizzo'];
                        $misura=$dataFetchedA['misura'];
                        $settore=$dataFetchedA['settori'];

                        echo'
                        <div class="border-top my-4">
                            
                            <h6 class="text-primary text-new"><span class="text-dark text-span-new font">ID: </span> <b class="font">'.$id.' </b></h6>
                            <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Azienda: </span> <b class="font">'.$Azienda.' </b></h6>
                            <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Indirizzo: </span> <b class="font">'.$Azienda.' </b></h6>
                            <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Settore: </span> <b class="font">'.$settore.' </b></h6>

                            <a href="./ViewTask.php?IdAzienda='. $id.'&&nome='. $Azienda.'">
                                <button class="btn btn-primary my-4">Controlla i task della azienda</button>
                            </a>
                            <a href="./ModificaAzienda.php?ModificaAzienda='. $id.'">
                                <button class="btn btn-primary my-4">Modifica dati azienda</button>
                            </a>
                            <a href="./RimuoviAzienda.php?RemoveAzienda='. $id.'">
                                <button class="btn btn-danger my-4">Cancella azienda</button>
                            </a>

                        </div>
                        ';
    
                    }

                 
                   
                   


               


            }else if($IdRuolo==2){

                //sei loggato come azienda
                $sqlAz="SELECT settori,aziende.id,Azienda,indirizzo, KsSettori,KsAziende  From utenti,aziende,settori where utenti.KsAziende=aziende.id AND aziende.KsSettori=settori.id AND username='$username'";
                $resAz=mysqli_query($con,$sqlAz);
                while($dataFetchedAz=mysqli_fetch_assoc($resAz)){
                    
                        $idz=$dataFetchedAz['KsAziende'];
                        $id=$dataFetchedAz['id'];
                        $Azienda=$dataFetchedAz['Azienda'];
                        $indirizzo=$dataFetchedAz['indirizzo'];
                        $misura=$dataFetchedAz['misura'];
                        $settore=$dataFetchedAz['settori'];
                    

                }

                echo'<h2>Benvenuto nel pannello Azienda</h2>


                

                <div class="border-top my-4">
                            
                <h6 class="text-primary text-new"><span class="text-dark text-span-new font">ID: </span> <b class="font">'.$id.' </b></h6>
                <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Azienda: </span> <b class="font">'.$Azienda.' </b></h6>
                <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Indirizzo: </span> <b class="font">'.$Azienda.' </b></h6>
                <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Settore: </span> <b class="font">'.$settore.' </b></h6>

                <a href="./ViewTask.php?IdAzienda='. $idz.'">
                    <button class="btn btn-primary my-4">Controlla i task della azienda</button>
                </a>
            </div>';
                
               


            }else{

                 //sei loggato come operatore

                echo'<h2>Benvenuto nel pannello operatore</h2>';

                $sqlAz="SELECT settori,aziende.id,Azienda,indirizzo,KsSettori,KsAziende  From utenti,aziende,settori where utenti.KsAziende=aziende.id AND aziende.KsSettori=settori.id AND username='$username'";
                $resAz=mysqli_query($con,$sqlAz);
                while($dataFetchedAz=mysqli_fetch_assoc($resAz)){
                    
                        $idz=$dataFetchedAz['KsAziende'];
                        $id=$dataFetchedAz['id'];
                        $Azienda=$dataFetchedAz['Azienda'];
                        $indirizzo=$dataFetchedAz['indirizzo'];
                        $misura=$dataFetchedAz['misura'];
                        $settore=$dataFetchedAz['settori'];
                    

                }

                echo'<h2>Sei registrato come operatore di questa azienda</h2>


                

                <div class="border-top my-4">
                            
                <h6 class="text-primary text-new"><span class="text-dark text-span-new font">ID: </span> <b class="font">'.$id.' </b></h6>
                <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Azienda: </span> <b class="font">'.$Azienda.' </b></h6>
                <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Indirizzo: </span> <b class="font">'.$Azienda.' </b></h6>
                <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Settore: </span> <b class="font">'.$settore.' </b></h6>

                <a href="./ViewTastOper.php?IdUtente='. $idUtente.'">
                    <button class="btn btn-primary my-4">Controlla i task della azienda</button>
                </a>
            </div>';

               
               
            }



}else{
    //loggati per vedere i dati
    echo ' <div class="container d-flex my-4">
    <h2 class="mx-0">Login to be able to Post a task ✏ </h2>
    <a  data-toggle="modal" data-target="#LoginModal" class="btn btn-primary mx-2 btn-lg" href="#" role="button">Log In</a>
 </div>';
}         

?>













    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>