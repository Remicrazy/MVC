<!-- VUE D'UN ARTICLE EN PARTICULIER "Page 3" -->

<div class="acceuil container">
  <p>Donnez vie à vos projets...
  </p>

</div>

<br><br><br>


    <?php

    foreach($liste as $post)
    {
        // Vue si il y a une colonne Etresillon dans la table
        if(isset($post['etresillon'])) {
            echo '<div class=" details container">
        <div class="titre1"><p><b>Cloture '.ucfirst(strtolower($post['categorie'])).' - '.$post['nom'].' </b><br>
        Référence : '.$post['ref'].'</p></div>
        <div class="row">
            <div class="col-3"><img class="bigimg" src="'.$post['url_img'].'" alt="'.$post['nom'].'">
            </div>
            <div class="col-8"><p>
                Caractéristiques : <br><br>
                Description : <br>
                Essence : '.$post['essence'].' <br>
                Traitement : '.$post['traitement'].' <br>
                Garantie du traitement : '.$post['garantie_trait'].' <br> <br>
                Composants : <br>
                Cadre : '.$post['cadre'].'<br>
                Etresillon : '.$post['etresillon'].'<br>
                Remplissage : '.$post['remplissage'].' <br> <br>
                Montage : <br>
                Type d\'assemblage : '.$post['assemblage'].' <br> <br>
                Epaisseur : '.$post['epaisseur'].' mm<br>
                Longueur : '.$post['longeur'].' m<br>
                Hauteur : '.$post['hauteur'].' mm

            </p></div>
        </div>
    </div>
                ';
            // Vue si il y a une colonne Raidisseur dans la table
        } elseif (isset($post['raidisseur'])) {
            echo '<div class=" details container">
        <div class="titre1"><p><b>Cloture '.ucfirst(strtolower($post['categorie'])).' - '.$post['nom'].' </b><br>
        Référence : '.$post['ref'].'</p></div>
        <div class="row">
            <div class="col-3"><img class="bigimg" src="'.$post['url_img'].'" alt="'.$post['nom'].'">
            </div>
            <div class="col-8"><p>
                Caractéristiques : <br><br>
                Description : <br>
                Essence : '.$post['essence'].' <br>
                Traitement : '.$post['traitement'].' <br>
                Garantie du traitement : '.$post['garantie_trait'].' <br> <br>
                Composants : <br>
                Cadre : '.$post['cadre'].' mm<br>
                Remplissage : '.$post['remplissage'].' <br>
                Raidisseur : '.$post['raidisseur'].' <br> <br>
                Montage : <br>
                Type d\'assemblage : '.$post['assemblage'].' <br> <br>
                Epaisseur : '.$post['epaisseur'].' mm<br>
                Longueur : '.$post['longeur'].' m<br>
                Hauteur : '.$post['hauteur'].' mm

            </p></div>
        </div>
    </div>
                ';
            // Vue pour les accessoires
        } elseif (!isset($post['essence'])) {
            echo '<div class=" details container">
        <div class="titre1"><p><b>'.ucfirst(strtolower($post['categorie'])).' - '.$post['nom'].' </b><br>
        Référence : '.$post['ref'].'</p></div>
        <div class="row">
            <div class="col-3"><img class="bigimg" src="'.$post['url_img'].'" alt="'.$post['nom'].'"></div>
            <div class="col-8"><p>
                Caractéristiques : <br><br>
                Structure : '.$post['traitement'].' <br>
                Dimension : '.$post['cadre'].' <br>
                Autre : '.$post['remplissage'].' <br> <br>
            </p></div>
        </div>
    </div>
                ';
        } else {
            echo '<div class=" details container">
        <div class="titre1"><p><b>Cloture '.ucfirst(strtolower($post['categorie'])).' - '.$post['nom'].' </b><br>
        Référence : '.$post['ref'].'</p></div>
        <div class="row">
            <div class="col-3"><img class="bigimg" src="'.$post['url_img'].'" alt="'.$post['nom'].'">
            </div>
            <div class="col-8"><p>
                Caractéristiques : <br><br>
                Description : <br>
                Essence : '.$post['essence'].' <br>
                Traitement : '.$post['traitement'].' <br>
                Garantie du traitement : '.$post['garantie_trait'].' <br> <br>
                Composants : <br>
                Cadre : '.$post['cadre'].' mm<br>
                Remplissage : '.$post['remplissage'].' <br> <br>
                Montage : <br>
                Type d\'assemblage : '.$post['assemblage'].' <br> <br>
                Epaisseur : '.$post['epaisseur'].' mm<br>
                Longueur : '.$post['longeur'].' m<br>
                Hauteur : '.$post['hauteur'].' mm

            </p></div>
        </div>
    </div>
                ';

        }
    }
    ?>

    <a href="javascript:history.back()"><button class="retour">Retour</button></a>
    <br><br><br><br><br>


<!-- <a href="image.php"><button class="retour">Retour</button></a>-->
