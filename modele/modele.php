<?php

require "modele/../connect.php";

// Modele regroupant les fonctions qui font appelle à la base de données.

class Modele
{
    // Fonction qui demande la liste des clotures séléctionné.
    public function getList($categorie)
    {
        $req = Bdd::getInstance()->requete("SELECT * FROM cloture WHERE categorie = ". $categorie)->fetchAll();
        return $req;
    }

    // Fonction qui demande le détail des clotutres séléctionné.
    public function getDetail($id)
    {
        $req = Bdd::getInstance()->requete('SELECT * FROM cloture WHERE id =' . $id)->fetchAll();
        $req_augmenterTelechargements = Bdd::getInstance()->requete('UPDATE cloture SET vue = (vue+1) WHERE id='.$id);
        return $req;
    }

    // Fonction qui montre les 6 articles les plus consultés
    public function getPlusVue()
    {
        $req = Bdd::getInstance()->requete('SELECT * FROM cloture ORDER BY vue DESC LIMIT 6 ');
        return $req;
    }

}




?>
