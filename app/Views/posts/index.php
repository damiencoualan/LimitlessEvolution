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

    <article class="video"> 
        <video src="../public/photo/video/video.mp4" autoplay muted loop></video>
    </article>

    <article class="Insta">
        <div class="Favorie">
            <h3 class="h3-insta">Votre communauté</h3>
            <a href="" class="link-product">Voir Tout</a>
        </div>
        <div class="bloc-picture1">
            <div class="insta-mob">  
                <div class="sub-picture1"> 
                    <div class="pct-insta">
                        <div>
                            <img src="../public/photo/insta/insta1.svg" alt="">
                        </div>
                    </div>
                    <div class="picto-insta">
                        <a href=""><img src="../public/photo/insta/Insta.svg" alt=""></a>
                    </div>
                </div>
                <div class="sub-picture1"> 
                    <div class="pct-insta">
                        <div>
                            <img src="../public/photo/insta/insta2.svg" alt="">
                        </div>
                    </div>
                    <div class="picto-insta">
                        <a href=""><img src="../public/photo/insta/Insta.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="insta-mob">
                <div class="sub-picture1"> 
                    <div class="pct-insta">
                        <div>
                            <img src="../public/photo/insta/insta3.svg" alt="">
                        </div>
                    </div>
                    <div class="picto-insta">
                        <a href=""><img src="../public/photo/insta/Insta.svg" alt=""></a>
                    </div>
                </div>
                <div class="sub-picture1"> 
                    <div class="pct-insta">
                        <div>
                            <img src="../public/photo/insta/insta4.svg" alt="">
                        </div>
                    </div>
                    <div class="picto-insta">
                        <a href=""><img src="../public/photo/insta/Insta.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="insta-mob">  
                <div class="sub-picture1"> 
                    <div class="pct-insta">
                        <div>
                            <img src="../public/photo/insta/insta5.svg" alt="">
                        </div>
                    </div>
                    <div class="picto-insta">
                        <a href=""><img src="../public/photo/insta/Insta.svg" alt=""></a>
                    </div>
                </div>
                <div class="sub-picture1"> 
                    <div class="pct-insta">
                        <div>
                            <img src="../public/photo/insta/insta2.svg" alt="">
                        </div>
                    </div>
                    <div class="picto-insta">
                        <a href=""><img src="../public/photo/insta/Insta.svg" alt=""></a>
                    </div>
                </div>
            </div>  
            <div class="insta-mob">  
                <div class="sub-picture1"> 
                    <div class="pct-insta">
                        <div>
                            <img src="../public/photo/insta/insta1.svg" alt="">
                        </div>
                    </div>
                    <div class="picto-insta">
                        <a href=""><img src="../public/photo/insta/Insta.svg" alt=""></a>
                    </div>
                </div>
                <div class="sub-picture1"> 
                    <div class="pct-insta">
                        <div>
                            <img src="../public/photo/insta/insta5.svg" alt="">
                        </div>
                    </div>
                    <div class="picto-insta">
                        <a href=""><img src="../public/photo/insta/Insta.svg" alt=""></a>
                    </div>
                </div>
            </div>  
        </div>
    </article>

    <article>
        <div class="bloc-h2-mob">
            <h1 class="h1-bloc-mob">Hommes</h1>
            <button class="button-man-mob">
            <a href="index.php?p=produits.indexHomme" class="p-btn-man">Découvrir</a>
            </button>
        </div>
        <div class="bloc-man">
            <div class="bloc-h2">
                <h1 class="h1-bloc-man">Hommes</h1>
                <button class="button-man">
                <a href="index.php?p=produits.indexHomme" class="p-btn-man">Découvrir</a>
                </button>
            </div>
        </div>
        <div class="art-home">
            <div class="Favorie">
                <a href="index.php?p=produits.indexHomme" class="link-product2">Voir Tout</a>
            </div>

            <div class="bloc-picture2">
                <?php foreach($produitsHomme as $produit): ?>
                <div class="article-pct2">  
                    <div class="pct-art">
                            <div class="svg-fav">
                            <a href="<?= $produit->url;?>">
                                <img src="../public/img/upload/<?= $produit->img; ?>">      
                            </a>
                        </div>
                    </div>  
                    <div class="circle"></div>
                    <div class="desc">
                        <p class="desc-article"><?= $produit->titre; ?></p>
                        <p class="desc-price"><?= $produit->prix; ?>€</p>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </article>
    <article>
        <div class="bloc-h2-mob">
            <h1 class="h1-bloc-mob">Femmes</h1>
            <button class="button-man-mob">
            <a href="index.php?p=produits.indexHomme" class="p-btn-man">Découvrir</a>
            </button>
        </div>
        <div class="bloc-girl">
            <div class="bloc-h2">
                <h2 class="h1-bloc-girl">Femmes</h2>
                <button class="button-girl">
                    <a href="index.php?p=produits.indexFemme" class="p-btn-girl">Découvrir</a>
                </button>
            </div>
        </div>
            <div class="art-home">
                <div class="Favorie">
                    <a href="" class="link-product2">Voir Tout</a>
                </div>
                <div class="bloc-picture2">

                    <?php foreach($produitsFemme as $produit): ?>
                    <div class="article-pct2">  
                        <div class="pct-art">
                             <div class="svg-fav">
                                <a href="<?= $produit->url;?>">
                                    <img src="../public/img/upload/<?= $produit->img; ?>">      
                                </a>
                            </div>
                        </div>  
                        <div class="circle"></div>
                        <div class="desc">
                            <p class="desc-article"><?= $produit->titre; ?></p>
                            <p class="desc-price"><?= $produit->prix; ?>€</p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
    </article>
    <article class="bloc-history"> 
        <div class="p-story">
            <div class="bloc-story">
                <div class="elm-story1">BIEN PLUS QU’UNE MARQUE DE SPORT</div>
                <div>Les membres de la communauté Limitless Evolution se sont voués à libérer leur potentiel grâce au conditionnement physique et à tout ce que nous entreprenons aujourd'hui pour préparer le futur. Quand vous voulez être au top de vos performances, rien ne devrait pouvoir vous arrêter, et encore moins votre tenue.
                </div>
                <div class="elm-story2">C’est pourquoi tous les vêtements et accessoires que nous créons pour vous ont pour objectif de vous faire progresser dans  les meilleurs résultats.</div>
            </div>
        </div>
    </article>
    <article class="story-mobil">
            <div class="elm-story1">BIEN PLUS QU’UNE MARQUE DE SPORT</div>
            <div>Les membres de la communauté Limitless Evolution se sont voués à libérer leur potentiel grâce au conditionnement physique et à tout ce que nous entreprenons aujourd'hui pour préparer le futur. Quand vous voulez être au top de vos performances, rien ne devrait pouvoir vous arrêter, et encore moins votre tenue.
            </div>
            <div class="elm-story2">C’est pourquoi tous les vêtements et accessoires que nous créons pour vous ont pour objectif de vous faire progresser dans  les meilleurs résultats.</div>
    </article>
    <article>
        <p class="title-newsletter">LIMITLESS EVOLUTION</p>
        <div class="bloc-newsletter">
            <div class="news">  
                <h3 class="h-news">NOTRE NEWSLETTER</h3>
                    <p class="p-news">Restez informé.e de l'actualité de la masse et des offres Limitless Evolution.</p>
                    <div class="Email">
                        <span class="border-email"> 
                            <input type="email" placeholder="Email" />
                            <button class="svg-email"><img src="../public/photo/newsletter/email.svg" alt=""></button>
                        </span>
                    </div>
            </div>
        </div>
    </article>