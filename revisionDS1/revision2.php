<?php
$ventes = array(
"pc" => ["prix" => 2500 , "quantite" => 3] ,
"souris" => ["prix" => 40 , "quantite" => 10] ,
"clavier" => ["prix" => 120 , "quantite" => 5] ,
"ecran" => ["prix" => 900 , "quantite" => 4] ,
"casque" => ["prix" => 150 , "quantite" => 7]
);
function calculerTotalProduit($produit) {
$total = ($produit["prix"] * $produit["quantite"]);
    return $total;
}
$total = 0;
foreach($ventes as $produits => $detaill) {
$total = calculerTotalProduit($detaill);
echo "Le Prix de " . $produits ." est : ".$detaill["prix"] .
" avec un quantite : " . $detaill["quantite"] . " , La Totale est :". $total . "<br>";
}

$somme = 0;
foreach($ventes as $produits => $detaill) {
$somme += calculerTotalProduit( $detaill );
}
echo "<h4>Le Chiffre D'affaire de la Boutique est <span style='color:red;' >$somme</span></h4>" ;

$maxVente = 0;
$maxProduit = "";
foreach($ventes as $produits => $detaill) {
    $total = calculerTotalProduit( $detaill );
    if ($total > $maxVente) {
        $maxVente = $total;
        $maxProduit = $produits;
}
}
echo "<h4> " . $maxProduit . " est Le produit Le plus Vendus , Avec un Chiffre D'affaire de : ". $maxVente . "</h4><br>";

$totalCA = [];
foreach ($ventes as $produits => $detaill) {
$totalCA[$produits] = calculerTotalProduit( $detaill );
}
arsort($totalCA);
echo  "<table border=1> <tr><td>produit avec un CA > 1000</td> <td>Chiffre D'affaire</td></tr>";
foreach ($totalCA as $produits => $detaill) {
    if ($detaill > 1000) {
        echo "<tr><td>$produits</td> <td>$detaill</td> </tr>";
    }
}
echo "</table>";
?>
