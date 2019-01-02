<?php
// VUE DE LA LISTE DES ARTICLES LES PLUS CONSULTES "Page 4"


foreach ($plusvue as $post) {
    echo ' <br>
    <div class=" lister container">
            <div class="liste row">
                <div class="col-sm">
                <img src="'.$post['url_vign'].'" alt="'.$post['nom'].'">
                </div>
                <div class="ref col-sm">
                Référence : '.$post['ref'].' <br>
                <b>'.$post['nom'].'</b>
                </div>
                <div class="col-sm">
                '.$post['vue'].' consultations <br>
                <a href="detail.php?id_clo=' . $post['id'] . '"><button>En savoir plus</button></a>
                </div>
            </div>
            </div>
            <br> <br>';
}
?>
