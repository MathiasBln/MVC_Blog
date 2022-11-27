<?php

namespace App\Manager;

use App\Entity\User;

class SignUpManager extends BaseManager
{
    /**
     * @return Login[]
     */
	public function addLogs($token) {
        $insert =  $this->pdo->prepare('INSERT INTO user(username, password, token) VALUES(:username, :password, :token)');
        $insert->execute(array(
            'username' => $_POST["username"],
            'password' => $_POST["password"],
			'token' => $token,
        ));
	}
}