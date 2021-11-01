<?php
require_once("./modules/access_control.php");
checkAccess();

require_once("./meta/htmlheaders.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?= htmlheaders("Panel"); ?>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="./assets/js/charts/chart-1.js" type="module"></script>
	<script src="./assets/js/charts/chart-2.js" type="module"></script>
	<script src="./assets/js/charts/chart-3.js" type="module"></script>
	<script src="./assets/js/charts/chart-4.js" type="module"></script>
</head>

<body class="body min-vh-100">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<h1 class="navbar-brand fs-5 fw-light">The Haroonian Panel</h1>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<?= $_SESSION["user"] ?>
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="./logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="row m-0">
		<div class="col-12 col-md-4 col-lg-3 col-xl-2 p-0 overflow-hidden">
			<aside class="aside-nav accordion accordion-flush" id="aside-nav">
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-heading-1">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
							<div class="d-flex align-items-center gap-2">
								<span class="material-icons">
									admin_panel_settings
								</span>
								<span class="fw-light">Admin Settings</span>
							</div>
						</button>
					</h2>
					<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-heading-1">
						<div class="accordion-body p-0">
							<div class="list-group-flush">
								<a href="#" class="list-group-item list-group-item-action fw-light disabled">Security</a>
								<a href="#" class="list-group-item list-group-item-action fw-light disabled">Payments</a>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-heading-2">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-2" aria-expanded="false" aria-controls="flush-collapse-2">
							<div class="d-flex align-items-center gap-2">
								<span class="material-icons">
									manage_accounts
								</span>
								<span class="fw-light">Account management</span>
							</div>
						</button>
					</h2>
					<div id="flush-collapse-2" class="accordion-collapse collapse" aria-labelledby="flush-heading-2">
						<div class="accordion-body p-0">
							<div class="list-group-flush">
								<a href="#" class="list-group-item list-group-item-action fw-light disabled">Add account</a>
								<a href="#" class="list-group-item list-group-item-action fw-light disabled">Remove account</a>
								<a href="#" class="list-group-item list-group-item-action fw-light disabled">Edit account settings</a>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-heading-3">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-3" aria-expanded="false" aria-controls="flush-collapse-3">
							<div class="d-flex align-items-center gap-2">
								<span class="material-icons">
									analytics
								</span>
								<span class="fw-light">Analytics</span>
							</div>
						</button>
					</h2>
					<div id="flush-collapse-3" class="accordion-collapse collapse" aria-labelledby="flush-heading-3">
						<div class="accordion-body p-0">
							<div class="list-group-flush">
								<a href="#" class="list-group-item list-group-item-action fw-light disabled">Add chart</a>
								<a href="#" class="list-group-item list-group-item-action fw-light disabled">Remove chart</a>
								<a href="#" class="list-group-item list-group-item-action fw-light disabled">Edit chart settings</a>
							</div>
						</div>
					</div>
				</div>
			</aside>
		</div>
		<div class="col-12 col-md-8 col-lg-9 col-xl-10 p-3 d-flex justify-content-center align-items-center">
			<main class="panel p-3">
				<div class="row">
					<div class="col-12 col-lg-6 col-xxl-4 mb-3">
						<div class="card border-dark rounded-3">
							<div class="card-header bg-dark text-light">
								Number of daily sales (Last 30 days)
							</div>
							<canvas class="card-body" id="chart01">
							</canvas>
						</div>
					</div>
					<div class="col-12 col-lg-6 col-xxl-4 mb-3">
						<div class="card border-dark rounded-3">
							<div class="card-header bg-dark text-light">
								Best selling products (Last 30 days)
							</div>
							<canvas class="card-body" id="chart02">
							</canvas>
						</div>
					</div>
					<div class="col-12 col-lg-6 col-xxl-4 mb-3">
						<div class="card border-dark rounded-3">
							<div class="card-header bg-dark text-light">
								Revenue (Last 2 months)
							</div>
							<canvas class="card-body" id="chart03">
							</canvas>
						</div>
					</div>
					<div class="col-12 col-lg-6 col-xxl-4 mb-3">
						<div class="card border-dark rounded-3">
							<div class="card-header bg-dark text-light">
								Most viewed categories (Last 6 months)
							</div>
							<canvas class="card-body" id="chart04">
							</canvas>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>
</body>

</html>