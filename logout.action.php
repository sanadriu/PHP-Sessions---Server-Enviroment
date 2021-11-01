<?php
require_once("./modules/validate.php");
require_once("./modules/session.php");

if (checkLogout()) {
	closeSession();
	header("Location: ./?logout");
} else {
	header("Location: ./panel");
}
