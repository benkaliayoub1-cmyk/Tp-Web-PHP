<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <title>exercice 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

   <?= "<h3>Calcul de la TVA</h3>"; ?>
    <form method="post">
        <div class="mb-3">
            <?= '<label class="form-label">Prix HT</label>'; ?>
            <input type="number" name="prixHT" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Taux TVA (ex: 0.19)</label>
            <input type="number" name="tauxTVA" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Calculer</button>
    </form>

    <?php
    if (isset($_POST['prixHT']) && isset($_POST['tauxTVA'])) {

        $prixHT = htmlspecialchars($_POST['prixHT']);
        $tauxTVA = htmlspecialchars($_POST['tauxTVA']);

        $montantTVA = $prixHT * $tauxTVA/100;
        $prixTTC = $prixHT + $montantTVA;
    ?>
        <div class="alert alert-success mt-4">
            <strong>Résultat :</strong><br>
            Montant TVA : <?= number_format($montantTVA, 2); ?> DT <br>
            Prix TTC : <?= number_format($prixTTC, 2); ?> DT
        </div>
    <?php } ?>
</body>
</html>

