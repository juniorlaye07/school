<?php
      function chargerClass($classe){
            require $classe.".php";
            }
            spl_autoload_register('chargerClass');
         
         
            $BaseD = new PDO('mysql:host=127.0.0.1;dbname=Universite','root','salimata09!');
            $BaseD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $gestion = new EtudiantService($BaseD);
            $Matricule=rand(0,70000);
             
              
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="jquery.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/ly.css">
   
</head>
<body>


<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">

      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
            
        <div class="card card-signin my-5">
        <div class="card-body">
             <div class="text-center">            
              <h3 class="login-heading mb-4">Bienvenue!</h3>
              </div>
              <form action="classes/Ajoute-Etudiant.php" method="Post">
               
                <div class="form-label-group">
                  <input type="text" id="inputPassword" class="form-control" placeholder="Nom" name="Nom" required>
                  <label for="inputPassword">Nom</label>
                </div>

                <div class="form-label-group">
                  <input type="text" id="inputPassword" class="form-control" placeholder="Prenom" name="Prenom" required>
                  <label for="inputEmail">Prenom</label>
                </div>

                <div class="form-label-group">
                  <input type="number" id="inputPassword" class="form-control" placeholder="Tel" name="Tel" required>
                  <label for="inputPassword">Tel</label>
                </div>

                <div class="form-label-group">
                  <input type="text" id="inputPassword" class="form-control" placeholder="Email" name="Email"required>
                  <label for="inputEmail">Email</label>
                </div>
                <div class="form-label-group">
                  <input type="date" id="inputPassword" class="form-control" placeholder="Password" name="Date_naissance"required>
                  <label for="inputEmail">Date_naissance</label>
                </div>
<!--=============Debut boutons radios=========================================£================================================================================-->
                        <p>
                          <div>
                          <input type="radio" id="B" name="Bourse"  value="Boursier" placeholder="">
                          <label for="">Boursiers</label>
                          </div>
                          <div id="nobr">
                            <input type="radio" id="nb" name="Bourse" value="NBoursier">
                            <label for="">Non-Boursiers</label>
                          </div>
                        </p>
                        <hr class="my-4">
                        <div id="idnobourse">
                          <input type="text" name="Adresse" id="titre"  class="form-control" placeholder="Adresse">
                        </div>
                        <p>
                          <div id="lnl">
                            <input type="radio" id="l" name="loger" value="Loger"  placeholder="">
                            <label for="">Loger</label>
                            <div id="nolog">
                              <input type="radio" id="nl" name="loger" value="noLoger" >
                              <label for="">Non-Loger</label>
                            </div>
                          </div>
                        </p>
                        <div id="idloger">
                         <label for="">Chambres</label>
                          <?php
                          

                  echo '<select name="chambre" id="" class="form-control">
                  <option value=""></option>';
                      $requette=$BaseD->query("SELECT *FROM Chambre");
                          while($tablecham=$requette->fetch())
                          {
                            echo'<option value="'.$tablecham['NChambre'].'">'.$tablecham['NChambre'].'</option>';
                          }
                  echo'</select><br>';    
                    ?> 
                          <div>
                            <label for="">Batiments</label>
                          <?php
                  echo '<select name="bat" id="" class="form-control">
                  <option value=""></option>';
                       $requette=$BaseD->query("SELECT *FROM Batiment");
                          while($tablecham=$requette->fetch())
                          {
                            echo'<option value="'.$tablecham['Id_batiment'].'">'.$tablecham['NomBat'].'</option>';
                          }
                  echo'</select><br>';    
                    
                     ?>
                          </div>
                        </div>

                        <div id="idbourse">
                          <label for="">Type-Bourse</label>
                          <?php
                  echo '<select name="Type" id="" class="form-control">
                  <option value=""></option>';
                    $requette=$BaseD->query("SELECT *FROM TypeB");
                          while($tabletype=$requette->fetch())
                          {
                            echo'<option value="'.$tabletype['Id_Type'].'">'.$tabletype['Libelle'].'</option>';
                          }
                  echo'</select><br>';    
                    ?> 
                        </div>
<!--==============Fin bouton radio=============================================£=======================================================================-->
                                                <hr class="my-4">
              <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" name="enregistrer" type="submit">Enregistrer</button>
                <div class="text-center">
                   <a href="classes/listeEtudiants.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span>Listes</a>
                </div>
              </form>
              <script src="js/foradio.js"></script>
              </div>
            </div>
          </div>
            
          </div>
          
        </div>
        
      </div>
      
    </div>
    
  </div>
  
</div>
        <?php
            if (isset($_POST['enregistrer'])) {
              if (!empty($_POST['Adresse']))
            {
                $apprenant=new NonBoursier($Matricule,$_POST['Nom'],$_POST['Prenom'],$_POST['Tel'],$_POST['Email'],$_POST['Date_naissance'],$_POST['Adresse']);
            }
            else if (!empty($_POST['Type']) && empty($_POST['chambre'])) 
            {
                       $apprenant=new Boursier($Matricule,$_POST['Nom'],$_POST['Prenom'],$_POST['Tel'],$_POST['Email'],$_POST['Date_naissance'],$_POST['Type']);
            }
            else
              {
                $apprenant=new Loger($Matricule,$_POST['Nom'],$_POST['Prenom'],$_POST['Tel'],$_POST['Email'],$_POST['Date_naissance'],$_POST['Type'],$_POST['chambre']);
              }
            $gestion->add($apprenant);
            var_dump($apprenant);
           }
      ?>
           
</body>
</html>