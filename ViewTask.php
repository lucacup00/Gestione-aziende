 <!-- getting the info from threads table using thread_id -->
 <?php
session_start();
include './modal.php'; 
include './links.php';
include './connessione.php';

$id=$_GET['IdAzienda'];
$nome=$_GET['nome'];



$sql="SELECT task.titolo,task.id,task.descrizione,task.datas,stato.Stato,utenti.username  FROM task,utenti,aziende,settori,stato where task.KsUtenti=utenti.id AND task.KsStato=stato.id AND utenti.KsAziende=aziende.id And aziende.id=$id GROUP BY task.titolo";

$res=mysqli_query($con,$sql);

// if($res){
//     echo'ok';
// }

include './Nav.php';
include './alert.php';
echo'<h3 class="my-4">Tasks azienda: '.$nome.' </h3>';


while($dataFetched=mysqli_fetch_assoc($res)){

    
    $Titolo=$dataFetched['titolo'];
    $descrizione=$dataFetched['descrizione'];
    $Data=$dataFetched['datas'];
    $stato=$dataFetched['Stato'];
    $idTask=$dataFetched['id'];
    $assegnazione=$dataFetched['username'];

    echo'
    <div class="border-top my-4">
        
        <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Titolo: </span> <b class="font">'.$Titolo.' </b></h6>
        <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Descrizione: </span> <b class="font">'.$descrizione.' </b></h6>
        <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Data inserimento: </span> <b class="font">'.$Data.' </b></h6>
        <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Stato: </span> <b class="font">'.$stato.' </b></h6>
        <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Assegnato a: </span> <b class="font">'.$assegnazione.' </b></h6>

        <a href="./DeleteTask.php?DeleteTask='. $idTask.'">
            <button class="btn btn-danger my-4">Elimina</button>
        </a>

        <a href="./ModificaTask.php?ModificaTask='. $idTask.'">
            <button class="btn btn-primary my-4">Modifica</button>
        </a>
    </div>
    ';

}


   


?>