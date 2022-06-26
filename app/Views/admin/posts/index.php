  <article class="compte">

    <h1>Votre Compte</h1>

    <div class="setting"> 
        <div class="info-admin">
            <div class="cmp1">Votre Compte</div>
            <div class="cmp">Vos commandes</div>
            <div class="cmp">Votre lites d'envies</div>
            <div class="cmp">Vos recommendations</div>
            <div class="cmp">Vos livraisons</div>
        </div>
        <div class="cmp3"><a class="log-out" href="index.php?p=users.logout">Déconnexion</a></div>
    </div>

<div class="add">
     <p>
        <a href="?p=admin.posts.add" class="btn btn-success">Ajouter</a>
    </p>
</div>

    <table class="table">
        <thead>
        <tr>
            <td>ID</td>
            <td>Titre</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
            <?php foreach($posts as $post): ?>
            <tr>
                <td><?= $post->id; ?></td>
                <td><?= $post->titre; ?></td>
                <td>
                    <a class="btn btn-primary" href="?p=admin.posts.edit&id=<?= $post->id; ?>">Editer</a>
                    <form action="?p=admin.posts.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $post->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</article>

