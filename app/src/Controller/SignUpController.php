<?php

namespace App\Controller;

use App\Factory\PDOFactory;
use App\Manager\PostManager;
use App\Manager\SignUpManager;
use App\Route\Route;

class SignUpController extends AbstractController
{
	#[Route('/', name: "signUp", methods: ["GET"])]
	public function insertLogs() {
		$this->render("signUp.php", [], "signUp");
	}

	#[Route('/createAccount', name: "connect", methods: ["GET", "POST"])]
	public function goToConnect() {
		$token = bin2hex(openssl_random_pseudo_bytes(64));
		$getLogs = new SignUpManager(new PDOFactory());
		$test = $getLogs->addLogs($token);
		$this->render(("connection.php"));
	} 

	#[Route('/login', name: "login", methods: ["GET", "POST"])]
	public function connection() {
		if(!empty($_POST['username']) && !empty($_POST['password'])) {
			$username = htmlspecialchars($_POST['username']); 
			$password = htmlspecialchars($_POST['password']);
			
			$username = strtolower($username);
	
			$check = $bdd->prepare('SELECT username, password, token FROM user WHERE username = ?');
			$check->execute(array($username));
			$data = $check->fetch();
			$row = $check->rowCount();
			
			if($row > 0)
			{
				if($password === $data['password'])
				{
					$_SESSION['user'] = $data['token'];
					header('Location: home.php');
					die();
				}else{ header('Location: connection.php'); die(); }
			}else{ header('Location: connection.php'); die(); }
		}else{ header('Location: connection.php'); die();}
		$this->render(("home.php"));
	} 

	// ROUTE -> Connexion
	// -> APPELLE ADDLOG($token)
	// RENDER -> login.php
}
