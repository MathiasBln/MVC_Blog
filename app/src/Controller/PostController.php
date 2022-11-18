<?php

namespace  Root\Html\Controller;

use Root\Html\Factory\PDOFactory;
use Root\Html\Manager\PostManager;
use Root\Html\Manager\UserManager;

class PostController extends AbstractController
{
    #[Route('/', name: "homepage", methods: ["GET"])]
    public function home()
    {
        $postManager = new PostManager(new PDOFactory());
        $posts = $postManager->getAllPosts();

        $this->render("home.php", ["posts" => $posts], "Tous les posts");
    }
};
