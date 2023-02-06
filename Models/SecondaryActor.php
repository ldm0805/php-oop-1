<?php 

class SecondaryActor
{
    public $actor;

    //Contruct di SecondaryActor per aggiungere gli attori secondari
    function __construct($_actor)
    {
        $this->actor = $_actor;
    }
}
