<?php
include __DIR__ . './Models/Movie.php';
include __DIR__ . './Models/DataMore.php';
include __DIR__ . './Models/SecondaryActor.php';

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
