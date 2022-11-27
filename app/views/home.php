<form action="/add" method="post">
    <div>
        <textarea type="text" name="post" placeholder="Texte ...." required="required" autocomplete="off"></textarea>
    </div>
    <div>
        <button type="submit">Create</button>
    </div>   
</form>

<?php foreach ($posts as $post): ?>
    <p><?=  $post->getPost(); ?></p>
    <a href="/post/<?= $post->getId() ?>">Update</a>
    <a href="/delete/<?= $post->getId() ?>">Supprimer</a>
    <p class='from'> écrit par <span class='author'><?= $post->getUsername(); ?></span></div>
<?php endforeach; ?>


