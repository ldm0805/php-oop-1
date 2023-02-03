<?php
//Definizione di una classe (Movie)
class Movie
{
    public $nome_film;
    public $regista;
    public $immagine;
    public $more_data_film;

    function __construct($_nome, $_regista, $_immagine, DataMore $_more_data_film)
    {
        $this->nome_film = $_nome;
        $this->regista = $_regista;
        $this->immagine = $_immagine;

        //Aggiungo con la classe DataMore
        $this->more_data_film = $_more_data_film;
    }
}
class DataMore
{
    public $lingua;
    public $attore_principale;
    public static $genere = 'Fantasy';

    function __construct($_lingua, $_attore_principale)
    {
        $this->lingua = $_lingua;
        $this->attore_principale = $_attore_principale;
    }
}

// $movie_1->nome_film = 'Harry Potter e la pietra filosofale';
// $movie_1->regista = 'Chris Columbus';
// $movie_1->lingua_originale = 'Inglese';
// var_dump($movie_1);

$movie_1 = new Movie('Harry Potter e la pietra filosofale', 'Chris Columbus', 'https://m.media-amazon.com/images/I/51D0MC5dZhL._SY445_.jpg', new DataMore('Inglese', 'Daniel Radcliffe'));
$movie_2 = new Movie('Il Signore degli Anelli', 'Peter Jackson', 'https://pad.mymovies.it/filmclub/2002/01/011/coverlg_home.jpg', new DataMore('Inglese', 'Elijah Wood'));
// echo '<pre>';
// var_dump($movie_1);
// echo '</pre>';


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
            <div class="col-12 d-flex">
                <div class="card">
                    <img class="card-img-top" src="<?php echo $movie_1->immagine; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h3><?php echo $movie_1->nome_film; ?></h3>
                        <p class="card-text"><?php echo $movie_1->regista; ?></p>
                        <p class="card-text"><?php echo $movie_1->more_data_film->lingua; ?></p>
                        <p class="card-text"><?php echo $movie_1->more_data_film->attore_principale; ?></p>
                        <p class="card-text"><?php echo DataMore::$genere; ?></p>
                    </div>
                </div>
                <div class="card">

                    <img class="card-img-top" src="<?php echo $movie_2->immagine; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h3><?php echo $movie_2->nome_film; ?></h3>
                        <p class="card-text"><?php echo $movie_2->regista; ?></p>
                        <p class="card-text"><?php echo $movie_2->more_data_film->lingua; ?></p>
                        <p class="card-text"><?php echo $movie_2->more_data_film->attore_principale; ?></p>
                        <p class="card-text"><?php echo DataMore::$genere; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>