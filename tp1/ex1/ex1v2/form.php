<?php
$con=mysqli_connect("localhost","root","","tpweb");


$name=htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST['prenom']);
$adresse=htmlspecialchars($_POST['adresse']);
$ville=htmlspecialchars($_POST['ville']);
$code_postal=htmlspecialchars($_POST['code_postal']);

$req1="INSERT INTO client (nom, prenom, adresse, ville, codep) VALUES ('$name', '$prenom', '$adresse', '$ville', '$code_postal')";

$res=mysqli_query($con, $req1);

$req2="SELECT * FROM client WHERE nom='$name'";
$res2=mysqli_query($con, $req2);
echo "<h2>les informations du client</h2>";
echo "<table border='2'>";
echo "<tr><td>"."Nom"."</td><td>"."Prenom"."</td><td>"."Adresse"."</td><td>"."Ville"."</td><td>"."Code postal"."</td></tr>";

if(mysqli_num_rows($res2)>0) {
    while($row=mysqli_fetch_array($res2)) {
       echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
    }}
?>