<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
<?php
session_start();
include './modal.php'; 
include './links.php';
include './connessione.php';





include './Nav.php';
if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){
    echo 
    '<div class="container my-4">
        <h1>create a new task</h1>

        <form action="./addTask.php" method="POST">';


        //verifico se sei loggato come opertaore 
        $username=$_SESSION['username'];
           
       $sql0="SELECT * 
       FROM utenti,ruolo 
       WHERE utenti.KsRuolo=ruolo.id AND username='$username' AND ruolo.id=3";
       $res0=mysqli_query($con,$sql0);
       $row=mysqli_num_rows($res0); 

       if($row==0){
                    //se non sei loggato come operatore stampare l'input per per assegnare task
                    echo'<div>

                    <label  class="form-label font2"><b>Assegna task allo operatore:</b></label>
                    <select class="form-select" name="operatore" aria-label="Default select example">
                    <option selected>Operatore</option>';
                
                

                $sql="SELECT * 
                FROM utenti,ruolo 
                WHERE utenti.KsRuolo=ruolo.id AND ruolo.id=3";
                $res=mysqli_query($con,$sql);


                while($dataFetched=mysqli_fetch_assoc($res)){
                $idOperatore=$dataFetched['utenti.id'];
                $Operatore=$dataFetched['username'];
                echo '<option value="'.$idOperatore.'">'.$Operatore.'</option>';

                }
                echo '</select>
                <div class="mb-3">
                
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id=""
                aria-describedby="emailHelp" required>
                        
                </div>
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="commentArea" name="descrizione" rows="3"></textarea>
                <div>Stato del task</b></label>
                         <select class="form-select" name="stato" aria-label="Default select example">
                        <option selected>Stato del task</option>';
                     
                     

                        $sql="SELECT * FROM `stato`";
                        $res=mysqli_query($con,$sql);


                        while($dataFetched=mysqli_fetch_assoc($res)){
                        $idStato=$dataFetched['id'];
                        $Stato=$dataFetched['Stato'];
                        echo '<option value="'.$idStato.'">'.$Stato.'</option>';

                        }
                        echo '</select>
                        </div>';
                     
                     
                     
                     
                     
                echo'</div>
                <button type="submit" class="btn btn-success my-4">Post a comment</button>
                </div>       
                </form>';

       }else{



            //creazione task operatore
            echo' 

            
            <div class="mb-3 my-4">
                    
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id=""
                aria-describedby="emailHelp" required>
                    
            
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="commentArea" name="descrizione" rows="3"></textarea>
           
            
            
            <label  class="form-label font2"><b>Stato del task</b></label>
                <select class="form-select" name="stato" aria-label="Default select example">
               <option selected>Stato del task</option>';
            
            

               $sql="SELECT * FROM `stato`";
               $res=mysqli_query($con,$sql);


               while($dataFetched=mysqli_fetch_assoc($res)){
               $idStato=$dataFetched['id'];
               $Stato=$dataFetched['Stato'];
               echo '<option value="'.$idStato.'">'.$Stato.'</option>';

               }
               echo '</select>
               </div>';
            
            
            
            
            
            echo'
            
            <button type="submit" class="btn btn-success my-4">Post a comment</button>
            </div>       
            </form>';      
            



       }



}else{
    // se non sei loggato
    echo ' <div class="container d-flex my-4">
    <h2 class="mx-0">Login to be able to Post a task ✏ </h2>
    <a  data-toggle="modal" data-target="#LoginModal" class="btn btn-primary mx-2 btn-lg" href="#" role="button">Log In</a>
 </div>';
}
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
        integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Optional JavaScript choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

</body>