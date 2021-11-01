<?php
require_once("./modules/validate.php");
require_once("./modules/session.php");

if (checkLogin()) {
	initSession();
	header("Location: ./panel");
} else {
	setSessionValue("errorMsg", "Access denied. Credentials are invalid.");

	header("Location: ./login");
}
