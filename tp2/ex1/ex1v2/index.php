<?php
session_start();
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

<?php
$nom=$email=$telephonne=$message="";
$nomErreur=$emailErreur=$messageErreur="";
$isValid=true;
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data); 
			$data = htmlspecialchars($data);
			return $data;
		}	
    if (!empty($_POST)) {
      if (empty($_POST["nom"])) {
        $isValid=false;
        $nomErreur="Le nom est un champs obligatoire";
      }
      else{
        $nom=test_input($_POST["nom"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
          $nomErreur="Seuls les lettres et l'espace sont permis";
          $isValid=false;
        }
      
      if (empty($_POST["email"])) {
        $isValid=false;
        $emailErreur="Le email est un champs obligatoire";
      }
      else{
        $email=test_input($_POST['email']);
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErreur = "Format adresse mail invalide";
					$isValid=false;
									
        }

		if (!empty($_POST['tel'])) {
			$telephonne = test_input($_POST['tel']);
		}

if (empty($_POST["message"])) {
    $messageErreur = "Message obligatoire";
    $isValid = false;
} else {
    $message = test_input($_POST["message"]);
}
      if ($isValid) {
        $_SESSION['nom'] = $nom;
        $_SESSION['email'] = $email;
        $_SESSION['message'] = $message;
        $_SESSION['telephone'] = $telephonne;
      $_SESSION['submitted'] = true;
      header(header: 'Location:envoi.php');
			exit;
    }
 }
      }
 }

?>
             <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="mb-3">
                      <label for="nom" class="form-label">Nom :<span class="text-danger"> *<?=$nomErreur?></span></label>
                      <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom & prénom"><br>
        
                </div>
                <div class="mb-3">
                      <label for="email" class="form-label">Email :<span class="text-danger"> *<?=$emailErreur?></span></label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Personne@exemple.xy">
                </div>
                <div class="mb-3">
                      <label for="telephone" class="form-label">Téléphone :</label>
                      <input type="number" class="form-control" id="telephone" name="telephone" placeholder="+216">
                </div>
                <div class="mb-3">
                       <label for="message" class="form-label">Votre Message :<span class="text-danger"> *<?=$messageErreur?></span></label>
                       <textarea class="form-control" id="message" name="message" rows="3" placeholder="Entrez votre message ici"></textarea>
                </div>
                   <button type="submit" class="btn btn-info">Envoyez</button>
                   <button type="reset" class="btn btn-warning">Annuler</button>
            </form>
         </div>
    </div>
</div>
</body>
</html>
