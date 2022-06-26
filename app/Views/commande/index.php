<?php

if(!empty($commandes)){
    ?>
    <div class="article-recap-cmd"> 
        <?php 
            foreach ($commandes as $key => $commande) {
                $donnees = json_decode($commande->donnees);
                ?>
                <div class="bloc-recap-commande">

                    <?php
                        foreach ($donnees->produit as $identifiant => $donnee) {
                            ?>
                            <div class="id">
                                <p>Total : <?=$commande->prix_total?>€</p>
                            </div>
                            <div class="id">
                                    <p>Date d'achat : <?= $commande->date_achat ?></p>
                            </div>                                  
                            <div class="bloc-recap-cmd"> 
                                <div class="art-panier">
                                    <img src="../public/img/upload/<?= $donnee->img; ?>">
                                </div>
                                <div class="recap"> 
                                    <div class="id">
                                        <p>Id : <?=$donnee->id ?></p>
                                    </div>
                                    <div class="title-recap">
                                        <p><span class="id"></span><?=$donnee->titre ?></p>
                                    </div>
                                    <div class="id">
                                        <p>Quantité : <?=$donnee->nbr ?></p>
                                    </div>
                                    <div class="id">
                                        <p>Total : <?=$donnee->total ?>€</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <?php
                        }
                    ?>
                </div>
            <?php 
            } 
            ?>
    </div>
    <?php
}
else{
    echo "<p>Vous n'avez aucune commande</p>";
}
 ?>
