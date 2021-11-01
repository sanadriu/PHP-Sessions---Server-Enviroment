<?php

if (session_status() === PHP_SESSION_NONE) session_start();

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

switch ($url) {
	case "/":
	case "/login":
		if (isset($_SESSION["user"])) header("Location: ./panel");

		require_once("./pages/login.php");
		login();
		break;
	case "/panel":
		if (!isset($_SESSION["user"])) header("Location: ./login");

		require_once("./pages/panel.php");
		panel();
		break;
	default:
		require_once("./pages/not-found.php");
		notFound();
}
