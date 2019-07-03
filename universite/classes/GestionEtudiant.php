<?php
      function chargerClass($classe){
            require $classe.".php";
            }
            spl_autoload_register('chargerClass');
         
         
            $BaseD = new PDO('mysql:host=127.0.0.1;dbname=Universite','root','salimata09!');
            $BaseD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $gestion = new EtudiantService($BaseD);
            $Matricule=rand(0,70000);
              if(($_POST['Bourse']=="Boursier" && $_POST['loger']=="Loger")){
                $apprenant=new Boursier($Matricule,$_POST['Nom'],$_POST['Prenom'],$_POST['Tel'],$_POST['Email'],$_POST['Date_naissance'],$_POST['Type'],$_POST['chambre']);
              }
              
             if( $_POST['Bourse']=="Boursier"){
                $apprenant=new Loger($Matricule,$_POST['Nom'],$_POST['Prenom'],$_POST['Tel'],$_POST['Email'],$_POST['Date_naissance'],$_POST['Type']);
              }
            
              if(($_POST['Bourse']=="NBoursier")){
                $apprenant=new NonBoursier($Matricule,$_POST['Nom'],$_POST['Prenom'],$_POST['Tel'],$_POST['Email'],$_POST['Date_naissance'],$_POST['Adresse']);
              }
            $gestion->add($apprenant);
              
?>