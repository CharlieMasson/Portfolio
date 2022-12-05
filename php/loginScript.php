<?php 
require "database.php";


if(isset($_POST['submit'])){
    if(isset($_POST['username']) and !empty($_POST['username'])){

        if(isset($_POST['password']) and !empty($_POST['password'])){

            //$password= sha1($_POST['password']);
            $pdo = Database::connect();
            $getdata = $pdo->prepare('SELECT password FROM account WHERE user=?');
            $getdata->execute(array($_POST['username']));

            if ($rows = $getdata->rowCount()>0){

                while($account = $getdata->fetch()){
                
                    if (password_verify($_POST['password'], $account['password'])){
    
                        session_start();
                        $_SESSION["connected"] = true;
                        //setcookie('connect','true',time()+3600);
                        header("Location: backoffice/dashboard.php");
    
                    }
    
                    else{
                        $erreur ="Identifiant ou mot de passe inconnue.";
                    }
        
                }

            }
            else{
                $erreur ="Identifiant ou mot de passe inconnue.";
            }

        }
        else{
            $erreur = "Veuillez saisir un mot de passe.";
        }
    }
    else{
        $erreur = 'Veuillez saisir un identifiant valide.';
    }

}
