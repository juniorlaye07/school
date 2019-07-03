<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="sty.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" id="bootstrap-css" />
  <link rel="stylesheet" href="Datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="buttons.bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="buttons.bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 
  
  <title>Rechercher Etudiant</title>
</head>
    <body>
      <a href="index.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span>Accueil</a></h1>
   
        <div class="container admin">
            <div class="row">
                <h1><strong class="text-logo">Recheche étudiants:</strong></h1>
   
    <div class="container">
        <div class="row">

         <div id="logo" class="pull-left">
              
              <form class="form-signin" action="Recherche.php" method="Post">
                  <div class="input-group form-group">
                    <p>
                      <input type="text" id="inputNumber" class="form-control" placeholder="Matricule" name="Matricule" >
                    </p>
                    <p>
                      <input class="btn btn-success btn-lg" name="recherche" type="submit" value="Rechercher">
                    </p>
                  </div>
              </form>

                  <?php
                     function chargerClass($classe){
                       require $classe.".php";
                         }
                       spl_autoload_register('chargerClass');

                        $BaseD = new PDO('mysql:host=127.0.0.1;dbname=Universite','root','salimata09!');
                        $BaseD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $gestion= new EtudiantService($BaseD);
                        if(isset($_POST["recherche"])){
                          $Mat=$_POST["Matricule"];
//=================verification par matricule============================£============================================================================================================================================================================================================================================================================================================================//£
                        $reque= $BaseD->query("SELECT * FROM Etudiant WHERE Matricule='".$Mat."'"); 
                        while($donnes=$reque->fetch()){
                          $idEtudiant=$donnes['Id_Etudiant'];
                        }
                         
//=====Cherche un loger===================================================£============================================================================================================================================================================================================================================================================================================================//£
                        $requetlog=$BaseD->query("SELECT Matricule,Nom,Prenom,Tel,Email,Date_naissance,Libelle ,Loger.NChambre,NomBat FROM Etudiant,Loger,Chambre,Batiment,Boursiers,TypeB WHERE Loger.Id_Etudiant='".$idEtudiant."' AND Etudiant.Id_Etudiant='".$idEtudiant."'  AND Batiment.Id_batiment=Chambre.Id_batiment AND Loger.NChambre=Chambre.NChambre AND Boursiers.Id_Type=TypeB.Id_Type");
                        $requetlog->execute();
                        $requetb= $BaseD->query("SELECT Matricule,Nom,Prenom,Tel,Email,Date_naissance,Libelle FROM Etudiant,Boursiers,TypeB,Loger  where Boursiers.Id_Type=TypeB.Id_Type  AND Boursiers.Id_Etudiant ='".$idEtudiant."' AND Etudiant.Id_Etudiant='".$idEtudiant."' AND Loger.Id_Etudiant<>'".$idEtudiant."'  ");
                        $requetb->execute();
                          
                        if ( $requetb->execute()==true || $requetlog->execute()==false ) {

                           while($apprenant=$requetb->fetch()){
                             ?>
                         </tbody>
                         </table>
                         <table class="table table-striped table-bordered" >
                         
                          <thead >  
                             <tr>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Tel</th>
                            <th>Email</th>
                            <th>Date_naissance</th>
                            <th>Bourses</th>
                          </thead>
                           <tbody>
                           <?php
                            
                           echo'<tr>
                        
                         <td>'. $apprenant['Matricule'].'</td>
                         <td>'. $apprenant['Nom'].'</td>
                         <td>'. $apprenant['Prenom'].'</td>
                         <td>'. $apprenant['Tel'].'</td>
                         <td>'. $apprenant['Email'].'</td>
                         <td>'. $apprenant['Date_naissance'].'</td>
                         <td>'. $apprenant['Libelle'].'</td>';
                          break;
                          } 
                        
                       if($requetlog->execute()==true){
                          while($apprenant=$requetlog->fetch()){
                              ?>
                              </tbody>
                                 
                        <table border=1 class="table table-striped table-bordered" >
                      
                          <thead >  
                             <tr>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Tel</th>
                            <th>Email</th>
                            <th>Date_naissance</th>
                            <th>Bourses</th>
                            <th>NºChambres</th>
                            <th>Batiments</th>
                          </thead>
                           <tbody>
                          <?php
                        echo'<tr>
                        
                         <td>'. $apprenant['Matricule'].'</td>
                         <td>'. $apprenant['Nom'].'</td>
                         <td>'. $apprenant['Prenom'].'</td>
                         <td>'. $apprenant['Tel'].'</td>
                         <td>'. $apprenant['Email'].'</td>
                         <td>'. $apprenant['Date_naissance'].'</td>
                         <td>'. $apprenant['Libelle'].'</td>
                         <td>'. $apprenant['NChambre'].'</td> 
                         <td>'. $apprenant['NomBat'].'</td> ';
                             
                          break;
                          }
                        }
                      }
//=====Cherche un boursier================================================£==================================================================================================//£
                           
//====Cherche un non boursier========================================================£===================================================================================================================================================//£
                      
                        $requetnob=$BaseD->query("SELECT Matricule,Nom,Prenom,Tel,Email,Date_naissance,Adresse FROM Etudiant,Non_boursier WHERE  Non_boursier.Id_Etudiant='".$idEtudiant."' AND Etudiant.Id_Etudiant='".$idEtudiant."'");
                          while($apprenant=$requetnob->fetch()){
                              ?>
                        </tbody>
                        </table> 
                             <table  class="table table-striped table-bordered" >
                               
                              <thead >  
                             <tr>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Tel</th>
                            <th>Email</th>
                            <th>Date_naissance</th>
                            <th>Adresse</th>
                             </tr>
                          </thead>
                          <tbody>
                             <?php
                          
                        echo'<tr>
                        
                         <td>'. $apprenant['Matricule'].'</td>
                         <td>'. $apprenant['Nom'].'</td>
                         <td>'. $apprenant['Prenom'].'</td>
                         <td>'. $apprenant['Tel'].'</td>
                         <td>'. $apprenant['Email'].'</td>
                         <td>'. $apprenant['Date_naissance'].'</td>
                         <td>'. $apprenant['Adresse'].'</td> 
                         </tr>';

                          break;
                          }
//===Fin Recherche===========================================£==============================================================================================================================//£
                        }
                     
                    ?>
                          </tbody>
                          </table>
              </div>
        </div>
    </body>
</html>
