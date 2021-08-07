<?php
if(isset($_GET['Registrazione']) && $_GET['Registrazione'] == true){
  $alert0= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
  <strong>Messaggio:</strong> Registrazione azienda avvenuta.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert0;
if($alert0!=""){
  ?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000)
</script>
<?php
}

}

if(isset($_GET['RegistrazioneNo']) && $_GET['RegistrazioneNO'] == true){
    $alert1= '<div class="alert my-0 alert-danger alert-dismissible fade show font2" role="alert">
    <strong>Messaggio:</strong> Registrazione azienda non avvenuta con successo.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert1;
  if($alert1!=""){
    ?>
  <script>
  setTimeout(() => {
      window.location = "./index.php";
  }, 2000)
  </script>
  <?php
  }
  
  }

  if(isset($_GET['AziendaEsist']) && $_GET['AziendaEsist'] == true){
    $alert2= '<div class="alert my-0 alert-danger alert-dismissible fade show font2" role="alert">
    <strong>Messaggio:</strong> Azienda già presente.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert2;
  if($alert2!=""){
    ?>
  <script>
  setTimeout(() => {
      window.location = "./index.php";
  }, 2000)
  </script>
  <?php
  }
  
  }


  if(isset($_GET['UtenteEsist']) && $_GET['UtenteEsist'] == true){
    $alert3= '<div class="alert my-0 alert-danger alert-dismissible fade show font2" role="alert">
    <strong>Messaggio:</strong> Utente già registrato.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert3;
  if($alert3!=""){
    ?>
  <script>
  setTimeout(() => {
      window.location = "./index.php";
  }, 2000)
  </script>
  <?php
  }
  
  }

  if(isset($_GET['NewUtente']) && $_GET['NewUtente'] == true){
    $alert4= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
    <strong>Messaggio:</strong> Registrazione utente avvenuta con successo.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert4;
  if($alert4!=""){
    ?>
  <script>
  setTimeout(() => {
      window.location = "./index.php";
  }, 2000)
  </script>
  <?php
  }
  
  }

  if(isset($_GET['NoUtente']) && $_GET['NoUtente'] == true){
    $alert5= '<div class="alert my-0 alert-danger alert-dismissible fade show font2" role="alert">
    <strong>Messaggio:</strong> Registrazione utente fallita.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert5;
  if($alert5!=""){
    ?>
  <script>
  setTimeout(() => {
      window.location = "./index.php";
  }, 2000)
  </script>
  <?php
  }
  
  }

  if(isset($_GET['Loggato']) && $_GET['Loggato'] == true){
    $alert6= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
    <strong>Messaggio:</strong> Utente Loggato.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert6;
  if($alert6!=""){
    ?>
  <script>
  setTimeout(() => {
      window.location = "./index.php";
  }, 2000)
  </script>
  <?php
  }
  
  }


  if(isset($_GET['RegistratiPrima']) && $_GET['RegistratiPrima'] == true){
    $alert7= '<div class="alert my-0 alert-danger alert-dismissible fade show font2" role="alert">
    <strong>Messaggio:</strong> Registrati prima.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert7;
  if($alert7!=""){
    ?>
  <script>
  setTimeout(() => {
      window.location = "./index.php";
  }, 2000)
  </script>
  <?php
  }
  
  }


  if(isset($_GET['loggedOut']) && $_GET['loggedOut'] == true){
    $alert8= '<div class="alert my-0 alert-danger alert-dismissible fade show font2" role="alert">
    <strong>Messaggio:</strong> Log Out.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert8;
  if($alert8!=""){
    ?>
  <script>
  setTimeout(() => {
      window.location = "./index.php";
  }, 2000)
  </script>
  <?php
  }
  
  }


  if(isset($_GET['AddTask']) && $_GET['AddTask'] == true){
    $alert9= '<div class="alert my-0 alert-danger alert-dismissible fade show font2" role="alert">
    <strong>Messaggio:</strong> Task Aggiunto.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert9;
  if($alert9!=""){
    ?>
  <script>
  setTimeout(() => {
      window.location = "./index.php";
  }, 2000)
  </script>
  <?php
  }
  
  }

  if(isset($_GET['AziendaCancellata']) && $_GET['AziendaCancellata'] == true){
    $alert10= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
    <strong>Messaggio:</strong> Azienda cancellata.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert10;
  if($alert10!=""){
    ?>
  <script>
  setTimeout(() => {
      window.location = "./index.php";
  }, 2000)
  </script>
  <?php
  }
  
}
  if(isset($_GET['Modifica']) && $_GET['Modifica'] == true){
    $alert10= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
    <strong>Messaggio:</strong>Dati della Azienda modificati.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert10;
  if($alert10!=""){
    ?>
  <script>
  setTimeout(() => {
      window.location = "./index.php";
  }, 2000)
  </script>
  <?php
  }
  
}

?>
