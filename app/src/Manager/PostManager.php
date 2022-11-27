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
        $query = $this->pdo->query("select * from post inner join user where post.userId = user.id");
        $posts = [];
        while ($data = $query->fetch(\PDO::FETCH_ASSOC)) {
            $posts[] = new Post($data);
        }
        return $posts;
    }

    //get by ID
	public function getOne($id) {
        $query = $this->pdo->query("select * from post where post.id = $id");
        $post = new Post($query->fetch(\PDO::FETCH_ASSOC));
        return $post;
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

    //on modifie un post dans la base de données
	public function update($id) {
        $insert =  $this->pdo->prepare("UPDATE post SET post = (:post) WHERE id = :id");
        $insert->execute(array(
            'post' => $_POST["post"],
            'id' => $id,
        ));
        header('Location:../');
	}

    //on supprime un post de la base de données
    public function delete(int $id) {
        $delete = $this->pdo->prepare("DELETE FROM post WHERE id=:id");
        $delete->execute(array(
            'id' => $id,
        ));
        header('Location:../');
    }


}
