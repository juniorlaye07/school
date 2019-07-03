<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="css/sty.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" id="bootstrap-css" />
  <link rel="stylesheet" href="Datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="buttons.bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 
  <title>Liste Boursiers</title>
</head>
    <body>
         <a href="index.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span>Accueil</a></h1>
   
        <div class="container admin">
            <div class="row">
                <h1><strong class="text-logo">Liste Boursiers</strong></h1>
                <div> <a href="Ajoute-Etudiant.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span>Enregistrer étudiant</a>
                </div>
                <table id="Boursiers" class="table table-striped table-bordered" >
                  <thead >  
                    <tr>
                      <th>Matricule</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Tel</th>
                      <th>Email</th>
                      <th>Date_naissance</th>
                      <th>Bourses</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     function chargerClass($classe){
                       require $classe.".php";
                         }
                       spl_autoload_register('chargerClass');
                          
                        $BaseD = new PDO('mysql:host=127.0.0.1;dbname=Universite','root','salimata09!');
                        $BaseD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $gestion= new EtudiantService($BaseD);

                      
                      foreach($gestion->findAllBoursier() as $apprenant) 
                      {
                         echo'<tr>
                         <td> AB'. $apprenant->Matricule.'</td>
                         <td>'. $apprenant->Nom.'</td>
                         <td>'. $apprenant->Prenom.'</td>
                         <td>'. $apprenant->Tel.'</td>
                         <td>'. $apprenant->Email.'</td>
                         <td>'. $apprenant->Date_naissance.'</td> 
                         <td>'. $apprenant->Libelle.'</td> 
                        </tr>';
                    }   
                    ?>
                  </tbody>
                </table>
              </div>
        </div>
    </body>
</html>
<script>
    $(document).ready(function() {
        $('#Boursiers').DataTable();
    } );
</script>