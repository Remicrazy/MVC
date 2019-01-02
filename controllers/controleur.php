<?php

include_once("modele/modele.php");

//Classe Controleur

class Controleur
{
    public $modele;

    public function __construct()
    {
        $this->modele = new modele();
    }

    //Fonction qui fait appelle à la vue 1
    public function invoke()
    {
        include 'views/home.php';
    }

    //Fonction qui fait appelle à la vue 2 ou 3 selon si le $_GET est définit tout en utilisant les fonctions adéquat.
    public function invoque($categorie)
    {
        if (!isset($_GET['id_clo'])) {
            $liste = $this->modele->getList($categorie);
            //Vue 2
            include 'views/liste-cloture.php';
        } else {
            $liste = $this->modele->getDetail($_GET['id_clo']);
            //Vue 3
            include 'views/detail-cloture.php';
        }
    }

    //Fonction qui fait appelle à la vue 4 et à la fonction d'affichage adéquat.
    public function invoquer()
    {
        $plusvue = $this->modele->getPlusVue();
        //Vue 4
        include 'views/liste-consulter.php';
    }



}

?>
