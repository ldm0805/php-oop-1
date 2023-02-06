<?php
include __DIR__ . './database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP-OOP-1</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="card-cont">
                <!-- ForEach per ciclare la classe -->
                <?php foreach ($arrayMovie as $movie) { ?>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $movie->immagine; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h3><?php echo $movie->nome_film; ?></h3>
                            <p class="card-text">Regista:
                                <span>
                                    <?php echo $movie->regista; ?>.
                                </span>
                            </p>
                            <p class="card-text ">Lingua:
                                <span>
                                    <?php echo $movie->more_data_film->lingua; ?>.
                                </span>
                            </p>
                            <p class="card-text">Attore Protagonista:
                                <span>
                                    <?php echo $movie->more_data_film->attore_principale; ?>.
                                </span>
                            </p>
                            <p class="card-text">Genere:
                                <span>
                                    <?php echo DataMore::$genere; ?>.
                                </span>
                            </p>
                            <div class="card-text">
                                Attori secondari:
                                <!-- ForEach per ciclare la gli attori secondari -->
                                <?php foreach ($movie->actor->actor as $actor) {
                                    echo "<p class='card-text'>
                                            <span>$actor.</span>
                                          </p>";
                                } ?>
                            </div>
                            <p class="card-text">Il film è stato prodotto :
                                <span>
                                    <!-- ForEach per calcolare gli anni dall'uscita del film -->
                                    <?php echo $movie->getAge(); ?> anni fa.
                                </span>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>