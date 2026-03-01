<?php
session_start();
if (!isset($_SESSION['submitted'])) {
    header('Location: index.php');
    exit;
}
unset($_SESSION['submitted']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>envoi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
           <div class="col-md-10 col-lg-8">
              <div class="alert alert-dark" role="alert"><h1> Votre message a été envoyé avec succès :) </h1></div>
                <p><strong>Nom : </strong><?= $_SESSION['nom']; ?></p>
                <p><strong>Email : </strong><?= $_SESSION['email']; ?></p>
                <p><strong>Message : </strong><?= $_SESSION['message']; ?></p>

    </div>
        </div>
           </div>
    
</body>
</html>
