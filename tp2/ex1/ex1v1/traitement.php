<?php
session_start();

$con = mysqli_connect("localhost" , "root" , "" , "tpweb");

if (!$con) {
    die("Connexion echouée". mysqli_connect_error());
}
$erreurs = [] ;
        if(empty($_POST['nom']))
        {
            $erreurs['nom'] = "Le nom est obligatoire";
        } else if(!preg_match("/^[a-zA-Z\s]+$/", $_POST['nom']))
        {
            $erreurs['nom'] = "Le nom doit contenir uniquement des lettres et des espaces";
        }
        if(empty($_POST['email']))
        {
            $erreurs['email'] = "Adresse email obligatoire";
        } else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $erreurs['email'] = "Adresse email invalide";
        }
        if(empty($_POST['message']))
        {
            $erreurs['message'] = "Message obligatoire";
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    if(empty($erreurs))
    {
        $_SESSION['nom'] = test_input($_POST['nom']);
        $_SESSION['email'] = test_input($_POST['email']);
        $_SESSION['message'] = test_input($_POST['message']);
        $_SESSION['telephone'] = test_input($_POST['telephone']);
        $_SESSION['submitted'] = true;
        $nom = $_SESSION['nom'];
        $email = $_SESSION['email'];
        $msg = $_SESSION['message'];
        $tel = $_SESSION['telephone'];
$req1 = "INSERT INTO etudiant (nom , email , tel , msg) VALUES ('$nom' , '$email' , '$tel' , '$msg')";

                          $res1 = mysqli_query($con, $req1);
                          
                    if ($res1) {
                         header('Location: envoi.php');
                         exit();
                   }  else {
                       echo "Erreur SQL : " . mysqli_error($con);
    }
                        

     } else {
        $_SESSION['erreurs'] = $erreurs;
        header('Location: index.php');
        exit();
        } 
?>