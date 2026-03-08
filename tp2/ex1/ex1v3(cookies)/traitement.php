<?php

if(empty($erreurs))
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        setcookie("nom" , test_input($_POST['nom']) , time()+3600);
        setcookie('email' , test_input($_POST['email'] , time()+3600) );
        setcookie("message" , test_input($_POST['message']) , time()+3600 );
        setcookie("telephone" , test_input($_POST['telephone']) , time()+3600 );
        setcookie("form_submitted", "yes", time() + 3600);
        header('Location: envoi.php');
        exit();
     }} else {
        header('Location: index.php');
        exit();
        } 

 function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
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
       
    
?>