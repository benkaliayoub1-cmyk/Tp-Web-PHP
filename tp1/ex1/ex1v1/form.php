<?php

$nom=htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST['prenom']);
$adresse=htmlspecialchars($_POST['adresse']);
$ville=htmlspecialchars($_POST['ville']);
$codepostal=htmlspecialchars($_POST['code_postal']);

echo "les informations que vous avez saisies sont : <br>
      <table border='1' cellpadding='10'>
             <tr>
                 <th>Nom</th>
                 <th>Prenom</th>
                 <th>Adresse</th>
                 <th>Ville</th>
                 <th>Code Postal</th>
             </tr>
             <tr>
                 <td>$nom</td>
                 <td>$prenom</td>
                 <td>$adresse</td>
                 <td>$ville</td>
                 <td>$codepostal</td>
              </tr>
       </table>";
?>