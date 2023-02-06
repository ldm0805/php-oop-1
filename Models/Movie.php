<?php 
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
