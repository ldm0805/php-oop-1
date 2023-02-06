<?php 
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
