<?php
require_once("./modules/access_control.php");
checkAccess();

require_once("./modules/session_control.php");
require_once("./meta/htmlheaders.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?= htmlheaders("Login"); ?>
</head>

<body class="body">
	<main class="min-vh-100 container-sm d-flex flex-column justify-content-center align-items-center">
		<h1 class="text-white text-center display-4">The Haroonian Panel</h1>
		<div class="login">
			<h2 class="text-white text-center fs-4 fw-light p-0 mb-4">Login</h2>
			<form class="login__form" method="POST" action="login.php">
				<input class="form-control form-control-lg mb-3 bg-light" type="text" name="user" id="user" placeholder="user@domain.com">
				<input class="form-control form-control-lg mb-3 bg-light" type="password" name="password" id="password" placeholder="password">
				<?php if (isset($_GET["logout"])) : ?>
					<div class="mb-3 bg-color-blue text-white text-center p-2 rounded-2">Logout successful</div>
				<?php endif; ?>
				<?php if ($errorMsg = getSessionValue("errorMsg")) : ?>
					<div class="mb-3 bg-danger text-white text-center p-2 rounded-2"><?= $errorMsg ?></div>
				<?php endif; ?>
				<div class="d-flex justify-content-center gap-3">
					<button class="btn btn-outline-light" style="width: 8rem" type="submit">Login</button>
				</div>
			</form>
		</div>
	</main>
</body>

</html>