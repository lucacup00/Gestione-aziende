<?php
include './connessione.php';

?>
<!-- LOGIN UTENTE  -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="LoginModalLabel">Accedi Azienda</h5>
                 <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
             <!-- qui va messo il form  -->
                 <form action="login.php" method="post">
                     <div class="form-group">
                         <label for="exampleInputPassword1">Email</label>
                         <input type="Email" class="form-control" name="EmailLogin" id="LoginEmail" placeholder="Email">
                         <label class="text-danger" id="wr"></label>
                     </div>
                     <div class="form-group">
                         <label for="exampleInputPassword1">Password</label>
                         <input type="password" class="form-control" name="PasswordLogin" id="LoginPassword" placeholder="Password">
                         <label class="text-danger" id="wr1"></label>
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>

 <!-- REGISTRAZONE Utente-->
 <div class="modal fade" id="RegistrazioneUtente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Registrazione utente</h5>
                 <button type="button" class="btn-close button-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                <!-- qui va messo il form  -->
                 <form action="./RegistrazioneUtente.php" method="post">

                 
                    
                     <div class="mb-3">
                         <label class="form-label">username</label>
                         <input type="Text" class="form-control" name="username" id="Cognome"
                             aria-describedby="emailHelp" required>
                             <label class="text-danger" id="wr3"></label>
                     </div>
                    <div class="mb-3">
                         <label class="form-label">Email</label>
                         <input type="Text" class="form-control" name="email" id="Email"
                             aria-describedby="emailHelp" required>
                             <label class="text-danger" id="wr4"></label>
                     </div>
                     <div class="mb-3">
                         <label class="form-label">Password</label>
                         <input type="password" class="form-control" name="password" id="Email"
                             aria-describedby="emailHelp" required>
                             <label class="text-danger" id="wr4"></label>
                     </div>
                     
                    <div>
                     <label  class="form-label font2"><b>Azienda in cui lavora</b></label>
                         <select class="form-select" name="azienda" aria-label="Default select example">
                        <option selected>Azienda</option>
                     <?php
                     

                        $sql="SELECT * FROM `aziende`";
                        $res=mysqli_query($con,$sql);


                        while($dataFetched=mysqli_fetch_assoc($res)){
                        $idAziende=$dataFetched['id'];
                        $Azienda=$dataFetched['Azienda'];
                        echo '<option value="'.$idAziende.'">'.$Azienda.'</option>';

                        }
                        echo '</select>
                        </div>';
                     
                     
                     
                     
                     ?> 

                    <label  class="form-label font2"><b>Ruolo</b></label>
                         <select class="form-select" name="ruolo" aria-label="Default select example">
                        <option selected>Scegli il ruolo</option>
                     <?php
                     

                        $sql="SELECT * FROM `ruolo`";
                        $res=mysqli_query($con,$sql);


                        while($dataFetched=mysqli_fetch_assoc($res)){
                        $idRuolo=$dataFetched['id'];
                        $Ruolo=$dataFetched['ruolo'];
                        echo '<option value="'.$idRuolo.'">'.$Ruolo.'</option>';

                        }
                        echo '</select>
                        </div>';
                     
                     
                     
                     
                     ?> 

                    
                     
                     
                     
                
                     <button type="submit" name="create" class="btn btn-primary">Submit</button>
                 </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>



 <!-- REGISTRAZONE Azienda-->
 <div class="modal fade" id="RegistrationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Registrazione azienda</h5>
                 <button type="button" class="btn-close button-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                <!-- qui va messo il form  -->
                 <form action="./registrazioneAzienda.php" method="post">
                    
                     <div class="mb-3">
                         <label class="form-label">Nome Azienda</label>
                         <input type="Text" class="form-control" name="azienda" id="Cognome"
                             aria-describedby="emailHelp" required>
                             <label class="text-danger" id="wr3"></label>
                     </div>
                    <div class="mb-3">
                         <label class="form-label">Indirizzo</label>
                         <input type="Text" class="form-control" name="indirizzo" id="Email"
                             aria-describedby="emailHelp" required>
                             <label class="text-danger" id="wr4"></label>
                     </div>
                     

                     <label  class="form-label font2"><b>Settore in cui opera</b></label>
                         <select class="form-select" name="settore" aria-label="Default select example">
                        <option selected>Scegli il settore</option>
                     <?php
                     

                        $sql="SELECT * FROM `settori`";
                        $res=mysqli_query($con,$sql);


                        while($dataFetched=mysqli_fetch_assoc($res)){
                        $idSettori=$dataFetched['id'];
                        $Settori=$dataFetched['settori'];
                        echo '<option value="'.$idSettori.'">'.$Settori.'</option>';

                        }
                        echo '</select>
                        </div>';
                     
                     
                     
                     
                     ?> 
                     
                     
                     
                
                     <button type="submit" name="create" class="btn btn-primary">Submit</button>
                 </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>