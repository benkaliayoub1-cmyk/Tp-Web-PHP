<?php
session_start();
$erreurs = isset($_SESSION['erreurs']) ? $_SESSION['erreurs'] : [];
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1 TP2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-3" >
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="alert alert-dark" role="alert"><h1> Contactez-nous ! </h1></div>
               <h4 class="mb-4">veuillez fournir votre nom et adresse email puis votre message</h4>
                 <h6 class="mb-4 text-danger">* Champs obligatoire</h6>

             <form method="post" action="traitement.php">
                <div class="mb-3">
                      <label for="nom" class="form-label">Nom :<span class="text-danger"> * <?php if(isset($erreurs['nom'])) echo $erreurs['nom']; ?></span></label>
                      <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom & prénom"><br>
        
                </div>
                <div class="mb-3">
                      <label for="email" class="form-label">Email :<span class="text-danger"> * <?php if(isset($erreurs['email'])) echo $erreurs['email']; ?></span></label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Personne@exemple.xy">
                </div>
                <div class="mb-3">
                      <label for="telephone" class="form-label">Téléphone :</label>
                      <input type="number" class="form-control" id="telephone" name="telephone" placeholder="+216">
                </div>
                <div class="mb-3">
                       <label for="message" class="form-label">Votre Message :<span class="text-danger"> * <?php if(isset($erreurs['message'])) echo $erreurs['message']; ?></span></label>
                       <textarea class="form-control" id="message" name="message" rows="3" placeholder="Entrez votre message ici"></textarea>
                </div>
                   <button type="submit" class="btn btn-info">Envoyez</button>
                   <button type="reset" class="btn btn-warning">Annuler</button>
            </form>
         </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</html>