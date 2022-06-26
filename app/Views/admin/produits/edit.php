 <div class="setting">
    <h1 class="h-edit">Ajouter un produits</h1>
    <div class="cmp3"><a class="log-out" href="index.php?p=users.logout">Déconnexion</a></div>
</div>

<div class="bloc-edit">
    <form method="post" enctype="multipart/form-data">

       <div class="elm-edit1"> <?= $form->input('titre', 'Titre de l\'article'); ?></div>

        <div  class="elm-edit"><?= $form->input('img', 'image du produit', ['type' => 'file']); ?></div>

        <div  class="elm-edit"><?= $form->input('img2', 'image du produit', ['type' => 'file']); ?></div>

        <div  class="elm-edit"><?= $form->input('img3', 'image du produit', ['type' => 'file']); ?></div>
        
        <div  class="elm-edit2"><?= $form->input('prix', 'prix', ['type' => 'number']); ?></div>

        <div  class="elm-edit3"><?= $form->input('description', 'description', ['type' => 'textarea']); ?></div>

        <div  class="elm-edit3"><?= $form->select('category_id', 'Catégorie', $categories); ?></div>

        <div  class="elm-edit3">
            <?= $form->input('type', 'Homme', ['type'=>'radio']); ?>
            <?= $form->input('type', 'Femme', ['type'=>'radio']); ?>        
        </div>

        <button class="btn btn-primary">Sauvegarder</button>
    </form>

</div>
