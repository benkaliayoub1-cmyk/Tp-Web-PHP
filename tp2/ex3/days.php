<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered bg-light">
   <?php
   include ("data.php");
   foreach($days as $en => $fr) {
    echo "<tr>";
    echo "<td> Anglais : $en</td>";
    echo "<td style='color:blue'> Francais : $fr</td>";
    echo "</tr>";
   }
   ?>
   </table>
</body>
</html>