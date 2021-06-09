<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet02 Exercice01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet02 Exercice01</h1>
            <h2 class="col-12 text-info text-center">Créez une boucle qui affiche les nombres de 0 à 10.</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php
                $i = 0;
                echo "les chiffres de 0 à 10 sont : <h6 class='m-2 text-center'>";
                while ($i < 10) {
                    // echo $i++;
                    echo '<h6 class="m-2"> '. $i;
                    $i++;
                }
            //   for ($i = 0; $i < 10; $i++) {
            //      if ($i == 9) {
            //        break;
            //      }
            //      echo "les chiffres de 0 à 10 sont : $i <p>";
            //    }
            ?>
        </div>
    </div>
</body>
</html>