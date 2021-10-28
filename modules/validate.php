<?php

require_once("./db/users.php");

function userValidation(): bool
{
	if (!filter_has_var(INPUT_POST, "user")) return false;

	return true;
}

function passwordValidation(): bool
{
	if (!filter_has_var(INPUT_POST, "password")) return false;

	return true;
}

function checkUserMatch(string $user, string $password): bool
{
	foreach (USERS_DB as $userDB) {
		if ($user === $userDB["user"] && $password === $userDB["password"]) return true;
	}

	return false;
}

function checkLogin(): bool
{
	if (!userValidation() || !passwordValidation()) return false;

	$user = $_POST["user"];
	$password = $_POST["password"];

	return (checkUserMatch($user, $password));
}

function checkLogout(): bool
{
	session_start();

	return boolval($_SESSION["user"]);
}
