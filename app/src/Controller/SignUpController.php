<?php

namespace App\Controller;

use App\Factory\PDOFactory;
use App\Manager\PostManager;
use App\Manager\SignUpManager;
use App\Route\Route;

class SignUpController extends AbstractController
{
	#[Route('/signUp', name: "login", methods: ["GET"])]
	public function insertLogs() {
		$this->render("login.php", [], "signUp");
	}

	#[Route('/createAccount', name: "connect", methods: ["GET", "POST"])]
	public function goToConnect() {
		$token = bin2hex(openssl_random_pseudo_bytes(64));
		$getLogs = new SignUpManager(new PDOFactory());
		$test = $getLogs->addLogs($token);
		$this->render(("login.php"));
	} 

	// ROUTE -> Connexion
	// -> APPELLE ADDLOG($token)
	// RENDER -> login.php
}
