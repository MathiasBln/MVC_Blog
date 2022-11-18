<?php /** @var App\Entity\User $user */ ?>

<?php
/** @var App\Entity\Post[] $posts */
foreach ($posts as $post) {
    echo $post->getPost();
}


