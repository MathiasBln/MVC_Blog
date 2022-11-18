<?php

namespace App\Manager;

use App\Entity\Post;

class PostManager extends BaseManager
{
    /**
     * @return Post[]
     */
    public function getAllPosts(): array
    {
        $query = $this->pdo->query("select * from post");

        $posts = [];

        while ($data = $query->fetch(\PDO::FETCH_ASSOC)) {
            $posts[] = new Post($data);
        }

        return $posts;
    }


    //on insère un post dans la base de données
	public function add() {
        $insert =  $this->pdo->prepare('INSERT INTO post(post, userId) VALUES(:post, :userId)');
        $insert->execute(array(
            'post' => $_POST["post"],
            'userId' => 1,
        ));
        header('Location:../');
	}
}
