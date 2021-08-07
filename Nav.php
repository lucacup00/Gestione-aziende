<!--Nav Bar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="CreateTask.php">New Task</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#RegistrationModal" href="#">Registrazione azienda</a></li>
            <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#RegistrazioneUtente">Registrazione utente</a></li>
            <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#LoginModal">Login utente</a></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>

      <?php
      if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {

        echo ' 
                                   
                                <p class="d-flex  text-align-center" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Welcome ' . $_SESSION['username'] . '
                                </p> 
                                <a class="text-dark  " data-bs-toggle="modal" 
                                        href="./logOut.php">
                                       <button class="btn "> Logout</button>
                                        </a>
            ';
      }
     ?>
      



    </div>
  </div>
</nav>