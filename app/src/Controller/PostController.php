<?php

namespace App\Controller;

use App\Factory\PDOFactory;
use App\Manager\PostManager;
use App\Manager\UserManager;
use App\Route\Route;

class PostController extends AbstractController
{
    #[Route('/', name: "homepage", methods: ["GET"])]
    public function home()
    {
        $getPost = new PostManager(new PDOFactory());
        $posts = $getPost->getAllPosts();

        $this->render("home.php", [
            "posts" => $posts,
        ], "Tous les posts");
    }

    #[Route('/add', name: "new", methods: ["GET", "POST"])]
	public function insert() {
        $getPost = new PostManager(new PDOFactory());
		$test = $getPost->add();
		$this->render();
	}
}
