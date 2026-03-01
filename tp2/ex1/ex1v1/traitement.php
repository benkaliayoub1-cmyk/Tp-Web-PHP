<?php
session_start();
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
        header('Location: envoi.php');
        exit();
     } else {
        $_SESSION['erreurs'] = $erreurs;
        header('Location: index.php');
        exit();
        } 
?>