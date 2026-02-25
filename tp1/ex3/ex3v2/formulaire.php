<?php
include ("my_arrays.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 3 version 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container mb-3">
         <h1>Gestion des Commandes</h1>
        <form class="form-group" action="detail.php" method="post">
   
    <div class="mb-4">
        <label>Magasin</label>
    <select class="form-select" aria-label="Default select example" name="magasin">
  <option selected>Choisir un magasin</option>
    <?php
    foreach ($magasins as $magasin) {
        echo "<option value=\'$magasin\'>$magasin</option>";
    }
    ?>
</select>
</div>
<div class="md-4">
    <label>Produit</label>
    <select class="form-select" aria-label="Default select example" name="produit">
  <option selected>Choisir un produit</option>
    <?php
    foreach ($produits as $produit) {
        echo "<option value=\'$produit\'>$produit</option>";
    }
    ?>
    </select>
</div>
    <div class="mt-4">
        <label>Quantité</label>
        <input type="number" class="form-control" placeholder="Quantite" name="quantite">
</div>
<div class="d-grid gap-2" style="margin-top: 20px;">
  <button class="btn btn-primary" type="submit">commander</button>
  <button class="btn btn-secondary" type="reset">Réinitialiser</button>
</div>
</form>
    </div>

</body>
</html>