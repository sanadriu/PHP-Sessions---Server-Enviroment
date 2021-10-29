<?php
require_once("./modules/validate.php");
require_once("./modules/session_control.php");

if (checkLogout()) {
	closeSession();
	header("Location: ./index.php?logout");
} else {
	header("Location: ./panel.php");
}
