 <!-- getting the info from threads table using thread_id -->
 <?php
session_start();
include './modal.php'; 
include './links.php';
include './connessione.php';
$id=$_GET['IdUtente'];


$sql="SELECT task.titolo,task.descrizione,task.datas,stato.Stato FROM task,utenti,aziende,settori,stato where task.KsUtenti=utenti.id AND task.KsStato=stato.id AND utenti.KsAziende=aziende.id And utenti.id=$id GROUP BY task.titolo";

$res=mysqli_query($con,$sql);

// if($res){
//     echo'ok';
// }
include './Nav.php';
echo'<h3 class="my-4">Tasks azienda</h3>';


while($dataFetched=mysqli_fetch_assoc($res)){

    
    $Titolo=$dataFetched['titolo'];
    $descrizione=$dataFetched['descrizione'];
    $Data=$dataFetched['datas'];
    $stato=$dataFetched['Stato'];

    echo'
    <div class="border-top my-4">
        
        <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Titolo: </span> <b class="font">'.$Titolo.' </b></h6>
        <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Descrizione: </span> <b class="font">'.$descrizione.' </b></h6>
        <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Data inserimento: </span> <b class="font">'.$Data.' </b></h6>
        <h6 class="text-primary text-new"><span class="text-dark text-span-new font">Stato: </span> <b class="font">'.$stato.' </b></h6>

        <a href="./delete.php?IdAnnuncio='. $id.'">
            <button class="btn btn-primary my-4">Elimina</button>
        </a>

        <a href="./Modifica.php?IdAnnuncio='. $id.'">
            <button class="btn btn-primary my-4">Modifica</button>
        </a>
    </div>
    ';

}


   


?>