<?php
 include ("data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Days with foreach loop</h1>
    <table class="table table-bordered bg-light">
   <?php
   foreach($days as $en => $fr) {
    echo "<tr>";
    echo "<td> Anglais : $en</td>";
    echo "<td style='color:blue'> Francais : $fr</td>";
    echo "</tr>";
   }
   ?>
   </table>
   <h1 class="text-center">Days with for loop</h1>
   <table class="table table-bordered bg-light">
    <?php
    for ($i = 0 ; $i<=6 ; $i++) {
        echo "<tr>";
        echo "<td> Anglais : $daysEn[$i] </td>";
        echo "<td style='color:blue' > Francais  : $daysFr[$i] </td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>