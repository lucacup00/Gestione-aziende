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
    $id=$_GET['ModificaAzienda'];



$sql="SELECT * from aziende where id=$id";
$res=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($res);




   echo' 
   <div class="my-4 container w-75">
    <form  action='.$_SERVER["REQUEST_URI"].' method="POST" class="row align-items-center">
    <div class="mb-3">
        <label   class="font2 form-label"><b>Nome Azienda</b></label>
        <input type="text" value='.$data['Azienda'].' class="form-control" name="Azienda"  >

    </div>
    <div class="mb-3">
        <label   class="font2 form-label"><b>Indirizzo</b></label>
        <input type="text" value='.$data['indirizzo'].' class="form-control" name="indirizzo"  >

    </div>
    
    <button type="submit"  class="my-4 btn btn-primary">Submit</button>
    </form>
    </div>';
  ?>  
</body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
<?php
include './alert.php';

$id=$_GET['ModificaAzienda'];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $Azienda=mysqli_real_escape_string($con,$_POST['Azienda']);
    $indirizzo=mysqli_real_escape_string($con,$_POST['indirizzo']);
    
    echo $Azienda." ".$indirizzo." ".$id;
 
    $sql1="UPDATE aziende SET Azienda='$Azienda',indirizzo='$indirizzo' WHERE id=$id"; 
    $res1=mysqli_query($con,$sql1);

 
   

    if($res1){
        ?>
        <script>
        
              window.location = "./index.php";
              alert(' Dati Azienda modificati  correttamente');
      
        </script>
             <?php 
      
    }else{
        echo 'NOT OK1';
    
    }
  

}
?>