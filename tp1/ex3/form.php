<?php require ("my_arrays.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tp 1 Ex3</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <center>
<form method="post" action="affiche.php">
   <?= "<label for='magasin'>Choisissez un magasin:</label>";?>
    <select name="magasin" id="magasin">
        <?php
        foreach ($magasins as $magasin) {
            echo "<option value='$magasin'>$magasin</option>" ;
        }
        ?>
    </select> <?="<br><br>"; ?>

    <?= "<label for='produit'>Choisissez un produit:</label>";?>
    <select name="produit" id="produit">
        <?php
        foreach ($produits as $produit) {
            echo "<option value='$produit'>$produit</option>";
        }
        ?>
    </select> <?php echo "<br><br>"; ?>
    <?= "<label for='quantite'>Quantité:</label>"; ?>
    <input type="number" id="quantite" name="quantite" min="1">

    <button type="submit" name="valider">Valider</button>
    <button type="reset">Annuler</button>
    </center>
    </form>
</body>
</html>