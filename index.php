<?php require_once "./db.php"; ?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Lista di Film</h1>
        <hr>
        <div class="row row-cols-md-2 g-5 mt-1 mb-5">
            <?php
            foreach ($movies as $movie) {
                echo '<section class="col">
            <div class="my-card">
            <h4>' . $movie->titolo . '</h4>
            <p><strong>Regista: </strong>' . $movie->regista . '</p>
            <p><strong>Genere: </strong>' . $movie->getAnno() . '</p>
            <p><strong>Anno di pubblicazione: </strong>' . $movie->genere->genere . '</p>
            <p><strong>Voto: </strong>' . $movie->getRating() . '</p>
            </div>
            </section>';
            }
            ?>
        </div>
    </div>
</body>

</html>