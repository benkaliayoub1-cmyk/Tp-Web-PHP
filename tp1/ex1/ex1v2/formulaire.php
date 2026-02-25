<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Client</title>
</head>
<body>
    <center>
    <h2>Adresse du client</h2>

    <form action="form.php" method="post">
        
        <label>Nom :</label><br>
        <input type="text" name="nom" required><br><br>

        <label>Prénom :</label><br>
        <input type="text" name="prenom" required><br><br>

        <label>Adresse :</label><br>
        <input type="text" name="adresse" required><br><br>

        <label>Ville :</label><br>
        <input type="text" name="ville" required><br><br>

        <label>Code postal :</label><br>
        <input type="number" name="code_postal" required><br><br>

        <button type="submit">Envoyer</button>
        </center>

    </form>

</body>
</html>

