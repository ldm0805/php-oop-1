<?php
//Definizione di una classe (Movie)
class Movie
{
    public $nome_film;
    public $regista;
    public $immagine;
    public $more_data_film;
    public $anno_uscita;
    public $actor;

    function __construct($_nome, $_regista, $_immagine, $_anno_uscita, DataMore $_more_data_film, MoreActor $_actor)
    {
        $this->nome_film = $_nome;
        $this->regista = $_regista;
        $this->immagine = $_immagine;
        $this->anno_uscita = $_anno_uscita;
        $this->actor = $_actor;
        //Aggiungo con la classe DataMore
        $this->more_data_film = $_more_data_film;
    }

    public function getAge()
    {
        $currentYear = date("Y");
        $age = $currentYear - $this->anno_uscita;
        return $age;
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

class MoreActor
{
    public $actor;
    function __construct($_actor)
    {
        $this->actor = $_actor;
    }
}

// $movie_1->nome_film = 'Harry Potter e la pietra filosofale';
// $movie_1->regista = 'Chris Columbus';
// $movie_1->lingua_originale = 'Inglese';
// var_dump($movie_1);

$movie_1 = new Movie('Harry Potter e la pietra filosofale', 'Chris Columbus', 'https://m.media-amazon.com/images/I/51D0MC5dZhL._SY445_.jpg', '2001', new DataMore('Inglese', 'Daniel Radcliffe'), new MoreActor(array("Ron Weasley", "Hermione Granger")));
$movie_2 = new Movie('Il Signore degli Anelli', 'Peter Jackson', 'https://pad.mymovies.it/filmclub/2002/01/011/coverlg_home.jpg', '2002', new DataMore('Inglese', 'Elijah Wood'), new MoreActor(array("Viggo Mortensen", "Sean Astin")));

$arrayMovie = [$movie_1, $movie_2];
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
    <div class="container-fluid">
        <div class="row">
            <div class="card-cont">
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
                                <?php foreach ($movie->actor->actor as $actor) {
                                    echo "<p class='card-text'>$actor.</p>";
                                } ?>
                            </div>
                            <p class="card-text">Il film è stato prodotto :
                                <span>
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