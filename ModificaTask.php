<?php

session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
include './connessione.php';

include './links.php';

include './Nav.php';
    $id=$_GET['ModificaTask'];



$sql="SELECT * from task where id=$id";
$res=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($res);




   echo' 
   <div class="my-4 container w-75">
    <form  action='.$_SERVER["REQUEST_URI"].' method="POST" class="row align-items-center">
    <div class="mb-3">
        <label   class="font2 form-label"><b>Titolo</b></label>
        <input type="text" value='.$data['titolo'].' class="form-control" name="titolo"  >

    </div>
    <div class="mb-3">
        <label   class="font2 form-label"><b>Descrizione</b></label>
        <input type="text" value='.$data['descrizione'].' class="form-control" name="descrizione"  >

    

    <div class="my-4">Stato del task</b></label>
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

    
    
    <button type="submit"  class="my-4 btn btn-primary">Submit</button>
    </form>
    </div>';
  ?>  
</body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
<?php
include './alert.php';

$id=$_GET['ModificaTask'];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $titolo=mysqli_real_escape_string($con,$_POST['titolo']);
    $descrizione=mysqli_real_escape_string($con,$_POST['descrizione']);
    $stato=mysqli_real_escape_string($con,$_POST['stato']);
    
    
 
    $sql1="UPDATE task SET titolo='$titolo',descrizione='$descrizione',KsStato=$stato WHERE  task.id=$id"; 
    $res1=mysqli_query($con,$sql1);

 
   

    if($res1){
        ?>
        <script>
        
              window.location = "./index.php";
              alert(' Dati task modificati correttamente');
      
        </script>
             <?php 
      
    }else{
        echo 'NOT OK1';
    
    }
  

}
?>