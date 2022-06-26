<section>        
    <div class="home-man" style="background-image: url(photo/bandeau/<?= $bandeau; ?>);"></div>

         <div class="bloc-help"> 
            <div class="bots">
                <div class="subbots">  
                    <div class="info-fav">
                        <div class="logo-bots"><img src="../public/photo/logo/bots/LogoHelp.svg" alt=""></div>
                        <p class="p-bots">Discuter avec un conseiller. <br>
                        Nous sommes là pour te renseigner</p>
                        <div class="close-bots"><img src="../public/photo/logo/bots/CloseHelp.svg" alt=""></div>
                    </div>
                    <div class="msg-fav">
                        <div class="day">
                            <span class="line1-bots"></span>
                                <span class="p-day">27 Avril</span>
                            <span class="line2-bots"></span>
                        </div>
                        <div>
                            <p class="title">Limitless Evolution</p>
                            <div class="bull">
                                <p class="p-bull">Comment pouvons-nous vous aider ? </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="send-fav">
                    <input class="msg" type="text" name="" autofocus id="msg" placeholder="Message ..." />
                    <div class="link-bots">
                        <button class="joint"><img src="../public/photo/logo/bots/joint.svg" alt=""></button>
                        <button class="send-bots"><img src="../public/photo/logo/bots/send.svg" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    <div class="svg-help"><img src="../public/photo/logo/bots/Help.svg" alt=""> </div> 

      <article class="article-produits">
        <h1 class="h1-produits"><?= $titre; ?></h1>
        <div class="sub-produits">

        <?php foreach($produits as $produit): ?>
            <div class="article-pct">  
                <div class="pct-art">
                    <div class="svg-fav">
                        <a href="<?= $produit->url;?>">
                        <img src="../public/img/upload/<?= $produit->img; ?>">  </div>
                    </div>  
                <div class="circle"></div>
                <div class="desc">
                    <p class="desc-article">Veste</p>
                    <p class="desc-price">90€</p>
                </div>
            </div>
        <?php endforeach; ?>

        </div>
    </article>
</section>
