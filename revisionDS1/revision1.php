<?php
$etudiants = array( "salah" => ["java" => 16 , "php" => 15 , "bd" => 15 , "gp" => 10],
"anis" => ["java" => 14 , "php" => 12 , "bd" => 19 , "gp" => 12] ,
"rayen" => ["java" => 12 , "php" => 14 , "bd" => 16 , "gp" => 11] ,
"talel" => ["java" => 17 , "php" => 15 , "bd" => 10 , "gp" => 12],
"zied" => ["java" => 9 , "php" => 10 , "bd" => 7 , "gp" => 8]
);


function calculerMoyenne ($notes) {
   $somme = $notes["java"]*2+$notes["php"]*2+$notes["bd"]*1.5+$notes["gp"];
   return $somme/6.5;
}

function afficherMention($moyenne) {
    if ($moyenne < 10) {
        return "Echec" ;
    } elseif ( ( $moyenne<12 ) ) {
        return "Passable";
    }
    elseif ( ( $moyenne<14 )) {
        return "Assez Bien";
    }
    elseif ( ( $moyenne<16 )) {
        return "Bien";
    }
    else {
        return "Très Bien";
    }
}

$mentions = [
"Echec"=>0,
"Passable"=>0,
"Assez Bien"=>0,
"Bien"=>0,
"Très Bien"=>0
];

foreach($etudiants as $etudiant => $note) {
    $moyenne = calculerMoyenne($note);
    $mention = afficherMention($moyenne);
    $mentions[$mention]++;

echo "L'etudiant " . $etudiant . " a une Moyenne de  "  .  round($moyenne , 2) . " et une Mention de " . $mention . " ." . "<br>";
 }
 

$max=0;
$meilleur="";
foreach($etudiants as $etudiant => $note){
if (calculerMoyenne($note)>=$max) {
    $max=calculerMoyenne($note);
    $meilleur=$etudiant;
    }
}
 echo  "Le meilleur etudiant est ".$meilleur. " -->  " .round($max , 2) . "." . "<br>" ;

$moyennes = [];

foreach($etudiants as $etudiant => $note) {
    $moyennes[$etudiant] = calculerMoyenne($note);
}
arsort($moyennes);

foreach ($moyennes as $etudiant => $moyenne ) {
    echo $etudiant ." : " . round($moyenne , 2) . "<br>" ;
}

$moyenneGenerale = array_sum($moyennes)/count($moyennes);

echo "La moyenne Generale de la classe est : " . round($moyenneGenerale , 2) . "<br>";

echo "<h4>Nombre d'etudiants Par mention : </h4>";
foreach ($mentions as $mention => $nbre) {
    echo "Le nombre de " . $mention . " : " . $nbre . "<br>" ;
}

?>
