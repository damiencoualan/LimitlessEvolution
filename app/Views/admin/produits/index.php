 <div class="setting">
       <h1 class="h-admin">Administrer les produits</h1>
    <div class="cmp">
        <div class="cmp1"><a class="log-out" href="index.php?p=compte.index">Compte de vos utilisateur</a></div>
        <div class="cmp2"><a class="log-out" href="index.php?p=users.logout">Déconnexion</a></div>
    </div>
</div>

<div class="bloc-admin">

    <button class="add">
            <a href="?p=admin.produits.add" class="p-add">Ajouter</a>
    </button>

    <table class="table">
        <thead>
        <tr>
            <td>ID</td>
            <td>Image</td>
            <td>Image2</td>
            <td>Image3</td>
            <td>Titre</td>
            <td>Prix</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
            <?php foreach($produits as $produit): ?>
            <tr>
                <td><?= $produit->id; ?></td>
                <td><img src="../public/img/upload/<?= $produit->img; ?>"></td>
                <td><img src="../public/img/upload/<?= $produit->img2; ?>"></td>
                <td><img src="../public/img/upload/<?= $produit->img3; ?>"></td>
                <td ><?= $produit->titre; ?></td>
                <td><?= $produit->prix; ?>€</td>        
                <td class="btn-admin">
                    <button class="edit">
                        <a class="btn btn-primary" href="?p=admin.produits.edit&id=<?= $produit->id; ?>">Editer</a>
                    </button>
                    <form action="?p=admin.produits.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $produit->id ?>">
                        <button type="submit" class="delete">Supprimer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

