<div> 
  <?php if(!empty($panier)){ ?>

    <div class="bloc-panier">
      <h1 class="h1-panier">Panier</h1>  

      <form action="index.php?p=panier.recapitulatif" method="POST" class="panier">
        <div class="article">
          <?php foreach ($panier as $idProduit => $champs): ?>
            <input type="hidden" id="produit-id-<?=$idProduit?>" name="produit-id-<?=$idProduit?>" value="<?= $idProduit?>">
            <input type="hidden" id="produit-<?=$idProduit?>-total" name="produit-<?=$idProduit?>-total" value="<?= $champs['prix']* $champs['nbr']?>">
            <input type="hidden" id="produit-<?=$idProduit?>-img" name="produit-<?=$idProduit?>-img" value="<?= $champs['img']?>">
                <div class="bloc-article">
                  <div class="bloc-img"> 
                      <div class="img">
                          <img src="../public/img/upload/<?=$champs['img']?>" alt="">
                      </div>
                      <div class="info-desktop"> 
                          <div class="desc-cmd">
                              <input type="text" id="produit-<?=$idProduit?>-titre-disabled" name="produit-<?=$idProduit?>-titre-disabled" value="<?=$champs['titre']?>" disabled="disabled" class="input-panier">
                          </div>
                          <div>
                              <select id="produit-<?=$idProduit?>-nbr" name="produit-<?=$idProduit?>-nbr"  data-produit="<?=$idProduit?>" data-prix="<?=$champs['prix']?>" class="input-panier produit-nbr">
                                    <option value="1" <?php if($champs['nbr'] == "1"){echo "selected";} ?>>1</option>
                                    <option value="2" <?php if($champs['nbr'] == "2"){echo "selected";} ?>>2</option>
                                    <option value="3" <?php if($champs['nbr'] == "3"){echo "selected";} ?>>3</option>
                                    <option value="4" <?php if($champs['nbr'] == "4"){echo "selected";} ?>>4</option>
                                    <option value="5" <?php if($champs['nbr'] == "5"){echo "selected";} ?>>5</option>
                                    <option value="6" <?php if($champs['nbr'] == "6"){echo "selected";} ?>>6</option>
                                    <option value="7" <?php if($champs['nbr'] == "7"){echo "selected";} ?>>7</option>
                                    <option value="8" <?php if($champs['nbr'] == "8"){echo "selected";} ?>>8</option>
                                    <option value="9" <?php if($champs['nbr'] == "9"){echo "selected";} ?>>9</option>
                                    <option value="10" <?php if($champs['nbr'] == "10"){echo "selected";} ?>>10</option>
                              </select>
                          </div>
                      </div>
                  </div>

                  <div class="bloc-price-mob">
                      <div class="info-mob"> 
                          <div class="desc-cmd">
                              <input type="text" id="produit-<?=$idProduit?>-titre-disabled" name="produit-<?=$idProduit?>-titre-disabled" value="<?=$champs['titre']?>" disabled="disabled" class="input-panier">
                          </div>
                          <div>
                              <select id="produit-<?=$idProduit?>-nbr" name="produit-<?=$idProduit?>-nbr"  data-produit="<?=$idProduit?>" data-prix="<?=$champs['prix']?>" class="input-panier produit-nbr">
                                    <option value="1" <?php if($champs['nbr'] == "1"){echo "selected";} ?>>1</option>
                                    <option value="2" <?php if($champs['nbr'] == "2"){echo "selected";} ?>>2</option>
                                    <option value="3" <?php if($champs['nbr'] == "3"){echo "selected";} ?>>3</option>
                                    <option value="4" <?php if($champs['nbr'] == "4"){echo "selected";} ?>>4</option>
                                    <option value="5" <?php if($champs['nbr'] == "5"){echo "selected";} ?>>5</option>
                                    <option value="6" <?php if($champs['nbr'] == "6"){echo "selected";} ?>>6</option>
                                    <option value="7" <?php if($champs['nbr'] == "7"){echo "selected";} ?>>7</option>
                                    <option value="8" <?php if($champs['nbr'] == "8"){echo "selected";} ?>>8</option>
                                    <option value="9" <?php if($champs['nbr'] == "9"){echo "selected";} ?>>9</option>
                                    <option value="10" <?php if($champs['nbr'] == "10"){echo "selected";} ?>>10</option>
                              </select>
                          </div>
                      </div> 
                      <div class="price-unit">
                        <div class="bloc-delete"> 
                          <label>Prix unité</label>
                          <a href="index.php?p=panier.deleteProduit&produit=<?=$idProduit?>" class="delete-cmd" >
                              <img src="../public/photo/logo/panier/delete.svg" alt="">
                          </a>
                        </div>
                        <input type="text" id="produit-<?=$idProduit?>-unite-disabled" name="produit-<?=$idProduit?>-unite-disabled" value="<?=$champs['prix']?>€" disabled="disabled" class="input-panier">
                      </div>
                      <div>
                        <label>Prix total</label>
                        <input type="text" id="produit-<?=$idProduit?>-total-disabled" name="produit-<?=$idProduit?>-total-disabled" value="<?=$champs['prix']* $champs['nbr']?>€" disabled="disabled" class="input-panier">
                      </div>
                  </div>
                </div> 
                <div class="line-panier"></div>
          <?php endforeach; ?>
        </div>
                <div class="price-commande"> 
                  <p class="info-commande">Livraison gratuit</p>
                    <div class="bloc-price-total">
                        <label class="total">Total</label>
                            <input type="text" id="commande-total-disabled" name="commande-total-disabled" value="<?=$prixTotalCommande?>€" disabled="disabled" class="input-panier">
                    </div>
                    <div>
                        <input type="hidden" id="commande-total" name="commande-total" value="<?=$prixTotalCommande?>">
                    </div>
                    <button class="btn-add"><p class="send">Valider le panier</p></button>

                    <button class="btn-delete-cmd"><a href="index.php?p=panier.delete"><p class="send">Annuler la commande</p></a></button>

                </div>
      </form>
    </div>

    <?php
    }else{ ?>
        <div class="bloc-delete-cmd">
          <p class="h1-panier">Votre Panier est vide</p>
            <div class="close-panier">
              <a href="index.php"><img src="../public/photo/logo/panier/close-panier.svg" alt=""></a>
            </div>
        </div>
  <?php
    }   ?>

</div>