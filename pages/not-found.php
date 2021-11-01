<?php

require_once("./meta/htmlheaders.php");

function notFound()
{
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<?= htmlheaders("Not Found"); ?>
	</head>

	<body class="body">
		<main class="min-vh-100 container-sm d-flex flex-column justify-content-center align-items-center">
			<h1 class="display-3 text-align-center text-light">Oops!</h1>
			<h2 class="display-5 text-align-center text-light">It seems the page you are looking for doesn't exist</h2>
		</main>
	</body>

	</html>

<?php
}
