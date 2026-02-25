<?php
$magasin = htmlspecialchars($_POST['magasin']);
$produit = htmlspecialchars($_POST['produit']);
$quantite = htmlspecialchars($_POST['quantite']);
  
if(isset($_POST['magasin']) && isset($_POST['produit']) && isset($_POST['quantite'])){
  
 
      echo "<h2>Votre commande:</h2>
          <table border='1'>
            <tr>
               <th>Magasin</th>
               <th>Produit</th>
               <th>Quantité</th>
           </tr>
            <tr>
               <td>$magasin</td>
               <td>$produit</td>
               <td>$quantite</td>
            </tr>
          </table>"; }
?>

