<a href="/">Return</a>
<form action="/update/<?= $post->getId()?>" method="post">
    <div>
        <textarea type="text" name="post" required="required" autocomplete="off"><?= $post->getPost()?></textarea>
    </div>
    <div>
        <button type="submit">Update</button>
    </div>   
</form>