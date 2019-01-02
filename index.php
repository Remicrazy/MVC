<?php
require "views/_header.php";

//Page PHP qui fait appelle aux Controleur afin d'afficher la vue 1 "Acceuil".

include_once("controllers/controleur.php");
$controleur = new Controleur();
$controleur->invoke();

require "views/_footer.php";

?>
