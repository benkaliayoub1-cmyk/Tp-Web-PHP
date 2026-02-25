
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>


<form action="traitement.php" method="post" class="container mt-5">
<div c
<div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">prenom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" required>
    </div>
    <div class="mb-3">
        <label for="codep" class="form-label">code postal</label>
        <input type="number" class="form-control" id="codep" name="codepostale" required>
    </div>
     <div class="mb-3">
        <label for="ville" class="form-label">ville</label>
        <input type="text" class="form-control" id="ville" name="ville" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
</body>
</html>