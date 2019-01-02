<?php
require "views/_header.php";

//Page PHP qui fait appelle aux Controleur afin d'afficher la vue 2 "Liste des articles".

if(isset($_POST['categorie'])) {
  include_once("controllers/controleur.php");

  $categorie = $_POST['categorie'];
  $nom = 'accessoires';
  $controleur = new Controleur();
  $controleur->invoque($categorie);
}

require "views/_footer.php";

?>
