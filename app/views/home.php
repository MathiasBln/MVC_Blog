
<h1>Welcome Home</h1>

<?php
/** @var App\Entity\Post[] $posts */
foreach ($posts as $post) {
    echo $post->getPost();
}


