<?php

include_once("modele/modele.php");

//Classe DétailControleur

class DetailControleur
{
    public $modele;

    public function __construct()
    {
      $this->modele = new modele();
    }

    //Fonction qui appelle à la vue 3 et la fonction adéquat.
    public function invoquer($id)
    {
        $liste = $this->modele->getDetail($id);
        include 'views/detail-cloture.php';
    }
}
