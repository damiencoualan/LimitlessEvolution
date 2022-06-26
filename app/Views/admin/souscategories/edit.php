<form method="post">
    <?= $form->input('titre', 'Tire de la catégorie'); ?>
    <?= $form->select('category_id', 'Catégorie', $categories); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>
