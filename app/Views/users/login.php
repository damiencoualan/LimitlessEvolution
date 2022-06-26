<div class="error-login">
    <div class="section-login">
        <div class="close-login">
           <a href="index.php"><img src="../public/photo/logo/modal/backPage.svg" alt="" /></a>
        </div>
        <div class="article-modal" id="dialogDesc">
            <div class="bloc-form1">  
                <div class="title-modal">
                    <p class="alert-login">
                        <?php if($errors): ?>
                            <div class="alert-login">
                                Identifiants incorrects ! <br> Veuillez remplir les champs ci-dessous. 
                            </div>
                        <?php endif; ?>
                    </p>
                </div>
                <form method="post" class="login">

                    <div class="bloc-form">
                      <div class="input-error"><?= $form->input('email', 'QUELLE EST VOTRE ADRESSE MAIL ?'); ?><div class="svg-error"><img src="../public/photo/logo/modal/required.svg" alt=""></div></div>
                        <div class="line"></div>
                    </div> 

                    <div class="bloc-form">
                       <div class="input-error"><?= $form->input('password', 'QUELLE EST VOTRE MOT DE PASSE ?', ['type' => 'password']); ?><div class="svg-error"><img src="../public/photo/logo/modal/required.svg" alt=""></div></div>
                        <div class="line"></div>
                    </div> 

                    <button class="submit">
                        <p class="p-send">Connexion</p>
                    </button>

                </form>
            </div> 
        </div>
    </div>
</div>
