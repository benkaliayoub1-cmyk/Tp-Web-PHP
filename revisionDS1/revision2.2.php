<?php
$stock = array(
"laptop" => ["prix" => 3000 ,"stock" => 5] ,
"tablette" => ["prix" => 1200 ,"stock" => 8] ,
"telephone" => ["prix" => 900 ,"stock" => 15] ,
"imprimante" => ["prix" => 450 ,"stock" => 4] ,
"routeur" => ["prix" => 200 ,"stock" => 10]
);


$totalStock = 0;
$somme = 0;
echo "<table border=1> <tr><td>Produit</td> <td>Valeur Totale</td></tr>";
foreach ($stock as $produit => $detail) {
    $totalStock = $detail["prix"] * $detail["stock"];
    $somme += $totalStock ; 
    echo "<tr><td>$produit</td><td>$totalStock</td></tr>";
}
echo "</table>";
echo "<h4>La valeur Totale De Stock est : <span style='color:red;'> $somme </span>  </h4>" ;


$produitInfSix = [];
$produitTriee = [];
$cher = 0;
$produitPlusCher = "";
$stockPlusFaible = $stock ['laptop'];
$produitStockFaible = "";
foreach ($stock as $produit => $detail) {
    if ($detail["prix"] > $cher) {
        $cher = $detail["prix"];
        $produitPlusCher = $produit;
    }
    if ($detail["stock"] < $stockPlusFaible) {
        $stockPlusFaible = $detail["stock"];
        $produitStockFaible = $produit;
    }
    $produitTriee[$produit] = $detail["prix"];
    if ($detail["stock"] < 6) {
        $produitInfSix[$produit] = $detail["stock"];
    }
}
echo "<h4>Le produit le plus Cher : <span style='color:red;'> $produitPlusCher </span> Avec un prix : $cher </h4>";
echo "<h4>Le produit Avec le Stock le plus Faible : <span style='color:red;'> $produitStockFaible </span> Avec un Stock : $stockPlusFaible </h4>";

asort($produitTriee);
echo "<table border=1 > <tr><td>Produit Avec un Stock inf a 6 </td> <td>Stock</td></tr>";
foreach ($produitInfSix as $produit => $stock) {
    echo "<tr><td>$produit</td> <td>$stock</td> </tr>";
}
echo "</table>";

?>