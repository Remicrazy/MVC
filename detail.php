<?php
require "views/_header.php";

//Page PHP qui fait appelle aux Controleur afin d'afficher la vue 3 "Détail d'un article".

include_once("controllers/detail.controleur.php");
$controleur = new DetailControleur();
$controleur->invoquer($_GET["id_clo"]);

require "views/_footer.php";
