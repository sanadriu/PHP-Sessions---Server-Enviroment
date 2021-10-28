<?php

function checkAccess()
{
	if (session_status() === PHP_SESSION_NONE) session_start();

	$url = explode('?', $_SERVER['REQUEST_URI'])[0];

	switch ($url) {
		case "/index.php":
			if (isset($_SESSION["user"])) header("Location: ../panel.php");
			break;
		case "/panel.php":
			if (!isset($_SESSION["user"])) header("Location: ../index.php");
			break;
		default:
			header("Location: ../index.php");
	}
}
