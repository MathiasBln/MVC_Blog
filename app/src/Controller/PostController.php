<?php

namespace  Root\Html\Controller;

use Root\Html\Factory\PDOFactory;
use Root\Html\Manager\PostManager;

class PostController extends AbstractController
{
    
    public function home()
    {
        $manger = new PostManager(new PDOFactory());
        $posts = $manger->getAllPosts();

        $this->render("home.php", ["posts" => $posts], "Tous les posts");
    }
}
