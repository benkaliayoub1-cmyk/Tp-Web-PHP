<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
include ("my_data.php");
?>
<h1 class="text-center">Liste avec boucle for</h1>

<table class="table table-bordered">
    <tr>
    <?php 
for($i=0; $i<12; $i++){

    if ($i != 0 && $i % 3 == 0) {
        echo "</tr><tr>";
    }

    echo '<td>' . ($i+1) . '</td>';
    echo '<td style="background-color:' . $colors[$i] . '">' . $months[$i] . '</td>';
}
        ?>
    </tr>

</table>

<h1 class="text-center">Liste avec boucle foreach</h1>
<table class="table table-bordered">
    <tr>
    <?php 
    foreach ($months as $index => $month) {
        if ($index != 0 && $index % 3 == 0) {
            echo "</tr><tr>";
        }
        echo '<td>' . ($index + 1) . '</td>';
        echo '<td style="background-color:' . $colors[$index] . '">' . $month . '</td>';
    }
        ?>

</body>
</html>