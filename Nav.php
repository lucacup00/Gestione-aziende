<!--Nav Bar-->
<?php


session_start();
include './connessione.php';
$sql="SELECT ruolo.ruolo FROM utenti,ruolo WHERE utenti.KsRuolo=ruolo.id and username='pipp'";
$res=mysqli_query($con,$sql);
$dataFetched=mysqli_fetch_assoc($res);
$Ruolo=$dataFetched['ruolo'];
?>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="CreateTask.php">New Task</a>
        </li>


        <!-- se sei loggato scompare il menu a tendina e compare il ruolo dell'utente registrato -->
        <?php
          if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
            echo ' 
            <li class="nav-item"> 
              <a class="nav-link " href="#" id="navbarDropdown" role="button"  aria-expanded="false">
                  Ruolo:'.$Ruolo.'
              </a>
            </li>';
            
          }else{
            echo'

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Gestione account
              </a>
              
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#RegistrationModal" href="#">Registrazione azienda</a></li>
                <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#RegistrazioneUtente">Registrazione utente</a></li>
                <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#LoginModal">Login utente</a></li>
              
            </ul>
          </li>
          </ul>';
         
     
        

          
        }


          ?>
       

      <?php
      if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {

        echo ' 
                                   
                             

                                    
                       
                                    <div class="form-inline my-2 my-lg-0">

                                        <div>
                                            Welcome ' . $_SESSION['username'] . '
                                        </div> 
                                         
                                        <a class="text-dark " href="./logOut.php">
                                              <button class="btn "> Logout</button>
                                          </a>
      
                                    </div>
                                   
                                
            ';
      }
     ?>
      



    </div>
  </div>
</nav>