<?php
//Definizione classe Movie
class Movie
{
    public $nome_film;
    public $regista;
    public $immagine;
    public $more_data_film;
    public $anno_uscita;
    public $actor;

    //Contruct di Movie per aggiungere tutti i dati
    function __construct($_nome, $_regista, $_immagine, $_anno_uscita, DataMore $_more_data_film, SecondaryActor $_actor)
    {
        $this->nome_film = $_nome;
        $this->regista = $_regista;
        $this->immagine = $_immagine;
        $this->anno_uscita = $_anno_uscita;
        $this->actor = $_actor;
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
    //Contruct di DataMore per aggiungere la lingua e l'attore principale
    function __construct($_lingua, $_attore_principale)
    {
        $this->lingua = $_lingua;
        $this->attore_principale = $_attore_principale;
    }
}

class SecondaryActor
{
    public $actor;

    //Contruct di SecondaryActor per aggiungere gli attori secondari
    function __construct($_actor)
    {
        $this->actor = $_actor;
    }
}


$movie_1 = new Movie(
    'Harry Potter e la pietra filosofale',
    'Chris Columbus',
    'https://m.media-amazon.com/images/I/51D0MC5dZhL._SY445_.jpg',
    '2001',
    new DataMore('Inglese', 'Daniel Radcliffe'),
    new SecondaryActor(array("Ron Weasley", "Hermione Granger"))
);
$movie_2 = new Movie(
    'Il Signore degli Anelli',
    'Peter Jackson',
    'https://pad.mymovies.it/filmclub/2002/01/011/coverlg_home.jpg',
    '2002',
    new DataMore('Inglese', 'Elijah Wood'),
    new SecondaryActor(array("Viggo Mortensen", "Sean Astin"))
);

$arrayMovie = [$movie_1, $movie_2];
