<?php
//Definizione di una classe (user)
class Movie
{
    public $nome_film;
    public $regista;
    public $lingua_originale;
    public static $paese_origine = 'America';
    public $data_di_uscita;
}
$movie_1 = new Movie();
$movie_1->nome_film = 'Harry Potter e la pietra filosofale';
$movie_1->regista = 'Chris Columbus';
$movie_1->lingua_originale = 'Inglese';
// var_dump($movie_1)


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP-OOP-1</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    <?php
                    echo "Nome del film: " . $movie_1->nome_film;
                    echo "<br> Regista: " . $movie_1->regista;
                    echo "<br> Lingua Originale: " . $movie_1->lingua_originale;
                    ?>
                </h1>
            </div>
        </div>
    </div>
</body>

</html>