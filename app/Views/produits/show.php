<div class="bloc-show">
    <h1><?= $produit->titre; ?></h1>
    <div class="bloc-banniere">
        <p class="banniere">Les membres profitent de la livraison gratuite et <br> des retours gratuits pendant 30 jours. <br>
            <a href="">Rejoignez-nous</a><br><a href="">En savoir plus</a>
        </p>
    </div>
    <div class="sub-bloc-show"> 
        <div class="show">  
            <div class="article-pct2">  
                <div class="pct-art2">
                    <div class="svg-fav">
                        <a href="<?= $produit->url;?>">
                        <div class="img-show">
                          <div class="art-show"><img src="../public/img/upload/<?= $produit->img; ?>"></div>
                                <div class="bloc-img"> 
                                    <?php if(!empty($produit->img2)){
                                        ?><div class="art-show"><img src="../public/img/upload/<?= $produit->img2; ?>"></div><?php
                                    }
                                    if(!empty($produit->img3)){
                                        ?><div class="art-show"><img src="../public/img/upload/<?= $produit->img3; ?>"></div><?php
                                    } ?>
                                </div>
                        </div>
                        </a>
                    </div>
                </div>  
            </div>
        </div>
        <div class="desc-show">
            <p class="p-matiere">Matières durables</p>
            <p class="title-show">Limitless Evolution Sportwear</p>
            <p class="desc-article"><?= $produit->titre; ?></p>
            <p class="desc-price-show"><?= $produit->prix; ?>€</p>
            <div class="color">
                <div class="svg-color"><img src="../public/photo/article/color/colorR.svg" alt=""></div>
                <div class="svg-color"><img src="../public/photo/article/color/colorB.svg" alt=""></div>
                <div class="svg-color"><img src="../public/photo/article/color/colorN.svg" alt=""></div>
            </div>
            <div class="guide">
                <p class="desc-article">Selectionner la taille</p>
                <a href="" class="taille">Guide des tailles</a>
            </div>
            <div class="btn-guide">
                <button class="btn-taille"><p>S</p></button>
                <button class="btn-taille"><p>M</p></button>
                <button class="btn-taille"><p>L</p></button>
                <button class="btn-taille"><p>XL</p></button>
                <button class="btn-taille"><p>2XL</p></button>
            </div>
            <div>
                <div class="bloc-btn">
                    <form method="post" action="index.php?p=panier.add">
                        <label for="nbr">Quantité</label>
                        <select name="nbr" id="nbr" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <input type="hidden" name="idProduit" id="idProduit" class="form-control" value="<?=$produit->id;?>">
                        <input type="hidden" name="prix" id="prix" class="form-control" value="<?=$produit->prix;?>">
                        <input type="hidden" name="titre" id="titre" class="form-control" value="<?=$produit->titre;?>">
                        <input type="hidden" name="img" id="img" class="form-control" value="<?=$produit->img;?>">
                        <button class="btn-add"><p class="p-send">Ajouter au panier</p></button>
                    </form>
                        <button class="btn-fav">
                            <a href="" class="p-send">Ajouter aux favoris</a>
                        </button>
                </div>
                <div class="bloc-desc">
                    <p class="p-bloc-desc">Inspiré de la veste Evolution Windrunner originale de 1978, le sweat à capuche Evolution Sportswear présente le même motif à chevron à 26 degrés sur la poitrine  pour un look emblématique.Le tissu en maille offre chaleur et confort, tandis que le ruban formant le design à chevron affiche des logos Swoosh et des inscriptions Evolution pour une finition inspirée de la piste.Ce produit est fabriqué avec au moins 75 % de fibres de polyester recyclé.
                    </p>
                    <div class="bloc-delivery">
                        <div class="delivery" onclick="toggleDelivery()">  
                            <p class="p-delivery">Livraison et retours gratuits</p>
                            <div class="svg-delivery">
                                <img src="../public/photo/delivery/delivery.svg" alt="">
                            </div>
                        </div>
                        <div id="toggleDelivery">
                            <p class="p-toggle">Livraison standard gratuite avec l'Accès Membre Limitless Evolution.</p>
                            <div>Vous pouvez retourner votre commande gratuitement, quelle que soit la raison, dans un délai de 30 jours.
                                <a href="" class="exclusif">Certaines exclusions s'appliquent.</a>
                            </div>
                        </div>
                    </div>

                    <div class="avis">
                        <p> Avis (0)</p>
                        <div class="opinion">   
                            <div class="rating">
                                <a href="#1" title="Donner 1 étoiles">★</a>
                                <a href="#2" title="Donner 2 étoiles">★</a>
                                <a href="#3" title="Donner 3 étoiles">★</a>
                                <a href="#4" title="Donner 4 étoiles">★</a>
                                <a href="#5" title="Donner 5 étoile">★</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="eco">
                    <div class="svg-eco">
                        <img src="../public/photo/delivery/eco.svg" alt="">
                    </div>
                    <p>Ce produit peut être recyclé. <a href="" class="exclusif">En savoir plus</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
