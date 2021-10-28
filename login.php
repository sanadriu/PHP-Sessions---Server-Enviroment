<?php
require_once("./modules/validate.php");
require_once("./modules/session_control.php");

if (checkLogin()) {
	initSession();
	header("Location: ./panel.php");
} else {
	setSessionValue("errorMsg", "Access denied. Credentials are invalid.");

	header("Location: ./index.php");
}
