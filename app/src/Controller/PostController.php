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

    #[Route('/post/{id}', name: "showOne", methods: ["GET", "POST"])]
	public function postById ($id) {
        $getPost = new PostManager(new PDOFactory());
		$post = $getPost->getOne(intval($id));
		$this->render("updateForm.php", [
            "post" => $post,
        ], "Show by ID");
	}

    #[Route('/update/{id}', name: "new", methods: ["GET", "POST"])]
	public function update($id) {
        $getPost = new PostManager(new PDOFactory());
        $post = $getPost->update(intval($id));
		$this->render();
	}

    #[Route('/delete/{id}', name: "delete", methods: ["GET", "POST"])]
    public function delete($id) {
        $getPost = new PostManager(new PDOFactory());
        $deletePost = $getPost->delete($id);
        $this->render();
    }
}
