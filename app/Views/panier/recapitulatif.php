
<div class="bloc-recap">

    <h1 class="h1-recap">Récapitulatif de votre commande</h1>

        <div class="bloc1-recap">
            <div class="article"> 
                <?php 
                foreach($produitsAll['produit'] as $produit){
                ?>
                    <div class="bloc-art"> 
                        <div class="art-panier">
                            <img src="../public/img/upload/<?= $produit['produit']->img; ?>">
                        </div>
                            <div class="recap"> 
                                <div class="title-recap">
                                    <p><span class="id"></span><?=$produit['produit']->titre ?></p>
                                </div>
                                <div class="id">
                                    <p>Id : <?=$produit['produit']->id ?></p>
                                </div>
                                <div class="id">
                                    <p>Quantité : <?=$produit['produit-nbr'] ?></p>
                                </div>
                                <div class="id">
                                    <p>Taille : <?=$produit['produit-nbr'] ?></p>
                                </div>
                                <div class="id">
                                    <p>Total : <?=$produit['produit-total'] ?>€</p>
                                </div>
                            </div>
                    </div>
                <?php 
                } 
                ?>
            </div>
            <div class="bloc-info"> 
                <?php 
                    foreach($produitsAll['commande'] as $commande){ 
                ?>
                    <div class="cmd"> 
                        <div class="btn-modif">
                            <a href="index.php?p=panier.index">Modifier la commande</a>
                        </div>
                        <?php
                        } 
                        ?>
                        <div class="cmd-id">
                            <p>Total de votre commande : <?=$commande?>€</p>
                        </div>
                    </div>
                        <form action="index.php?p=panier.confirmation" method="POST">
                            <?php foreach($produitsAll['produit'] as $id => $produit){ ?>
                                <input type="hidden" name="produit[<?=$id;?>][id]" id="produit-id-<?=$id;?>" value="<?=$id;?>">
                                <input type="hidden" name="produit[<?=$id;?>][titre]" id="produit-titre-<?=$id;?>" value="<?=$produit['produit']->titre;?>" >
                                <input type="hidden" name="produit[<?=$id;?>][nbr]" id="produit-nbr-<?=$id;?>" value="<?=$produit['produit-nbr']?>" >
                                <input type="hidden" name="produit[<?=$id;?>][total]" id="produit-total-<?=$id;?>" value="<?=$produit['produit-total']?>" >
                                <input type="hidden" name="produit[<?=$id;?>][img]" id="produit-img-<?=$id;?>" value="<?=$produit['produit-img']?>" >
                            <?php
                            }
                            ?>
                            <?php foreach($produitsAll['commande'] as $commande){ ?>
                                <input type="hidden" name="commande-total" id="commande-total" value="<?=$commande;?>" >
                            <?php
                            }
                            ?>
                            <?php 
                                if(isset($_SESSION['auth']) && !empty($_SESSION['auth'])){
                            ?>
                                <input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['auth']?>" >
                            <?php
                            }
                            else{
                               ?> <input type="hidden" name="user_id" id="user_id" value="" > <?php
                            }
                            ?>
                                <div class="bloc-card">
                                    <div class="payment-method">
                                        <p class="cmd-id">Séléctionner un mode de paiement</p>
                                    </div>
                                </div>
                                <div class="payment">
                                    <div> 
                                        <a class="choice"
                                            data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                                            aria-controls="collapseExample">
                                            <input type='radio' name="paiement" id="paypal"><label for="paypal"><img src="../public/photo/logo/panier/paypal.png" alt=""></label>
                                        </a>
                                    </div>
                                    <div> 
                                        <a class="choice"
                                            data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                                            aria-controls="collapseExample">
                                            <input type='radio' name="paiement" id="cb"><label for="cb" class="cb"><img src="../public/photo/logo/panier/CB.svg" alt=""><p class="id">Carte de crédit</p></label>
                                        </a>
                                    </div>                                           
                                </div>
                                <div  class="carte">
                                    <div class="form-carte">
                                        <!-- <?php foreach($produitsAll['commande'] as $commande){ ?>
                                        <?php } ?> -->
                                        <div>
                                            <div class="p-add"><p class="id-modif">Ajouter une carte</p></div>
                                                <div>
                                                    <?php if(isset($_SESSION['auth']) && !empty($_SESSION['auth'])){ ?>
                                                        <div class="clm-1">
                                                            <div>
                                                                <p class="id">Détenteur de la carte</p>
                                                                <input type="text" placeholder=" ">
                                                            </div>
                                                        </div>
                                                        <div class="clm-2">
                                                            <div>
                                                                <div>
                                                                    <p class="id">Numéro de carte</p>
                                                                    <input type="text" placeholder=" ">
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <div>
                                                                    <p class="id">Date d'éxpiration</p>
                                                                    <input type="text" placeholder=" ">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p class="id">Code de sécurité</p>
                                                                    <input type="password" placeholder=" ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <button class="btn-payment"><p class="id-payment">Valider le panier</p></button>
                                                    <?php }else{ ?>
                                                        <p class="id">Veuillez vous connecter pour pouvoir passer commandes</p>
                                                    <?php } ?>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
            </div>
        </div>
</div>