<!-- VUE DE LA LISTE DES CLOTURES "Page 2" -->

<div class="acceuil container">
  <p>Avec nos clotures <?php /*echo ucfirst(strtolower($nom))*/ ?> donnez vie à vos projets<br>

  <form action="lister.php" method="POST">
     Je souhaite rechercher par types de clôtures :      <select title="Votre choix" name="categorie" id="categorie">
      <option value="2">Clôtures Eden</option>
      <option value="3">Clôtures Helsinki</option>
      <option value="4">Clôtures Horizon</option>
      <option value="5">Clôtures Miami</option>
      <option value="6">Clôtures Rialto</option>
      <option value=7>Clôtures Rivoli</option>
      <option value="8">Clôtures Sanchez</option>
      <option value="9">Clôtures Shangai</option>
      <option value="10">Clôtures Venise</option>
      <option value="1">Accessoires</option>
    </select>
    <input type="submit" value="Valider">
  </form>

  </p>

</div>

<br><br><br>


    <?php

    foreach($liste as $post)
    {
        echo '<div class=" lister container">
                <div class="liste row">
                    <div class="col-sm">
                    <img src="'.$post['url_vign'].'" alt="'.$post['nom'].'">
                    </div>
                    <div class="ref col-sm">
                    Référence : '.$post['ref'].' <br>
                    <b>'.$post['nom'].'</b>
                    </div>
                    <div class="col-sm">
                    <a href="detail.php?id_clo=' . $post['id'] . '"><button>En savoir plus</button></a>
                    </div>

                </div>
                </div>
                <br> <br>';
    }
    ?>



