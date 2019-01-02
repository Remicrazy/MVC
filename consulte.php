<?php
require "views/_header.php";

//Page PHP qui fait appelle aux Controleur afin d'afficher la vue 4 "Article les plus consultés".

include_once("controllers/controleur.php");
$controleur = new Controleur();
$controleur->invoquer();

require "views/_footer.php";
