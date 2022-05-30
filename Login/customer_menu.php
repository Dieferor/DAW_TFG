<?php
session_start();
?>
<!doctype html>
<html lang="es">

<?php
include("./templates/header.php");
?>
<style>
	.center {
		height: 55vh;
		position: relative;
	}

	.center div {
		margin: 0;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		text-align: center;
	}
	h5 span{
		color: #f09d51;
	}
</style>

<?php
if (!isset($_SESSION['customer_email'])) {
	header('Location: index.pxp');
	exit;
} else {
	$customer_name = $_SESSION['customer_name'];
	include("./templates/header.php");
?>

	<body>
		<!-- navbar -->
		<?php
		include("./templates/nav-bar.html");
		?>
		<!-- end of navbar -->
		<div class="center">
			<div>
				<?php
				echo "<h5>Bienvenido <span>$customer_name</span></h5></br>";
				echo "<a href='logout.php'>Cerrar sesión</a>";
				?>
			</div>
		</div>
		<!-- sidebar -->
		<?php
		include("./templates/sidebar.html");
		?>
		<!-- end of sidebar -->

		<!-- cart -->
		<?php
		include("./templates/cart.html");
		?>
		<!-- end of cart -->

		<!-- footer -->
		<?php
		include("./templates/footer.html");
		?>
		<!-- end of footer -->

		<!-- Javascript -->
		<script type="text/javascript" src="../JavaScript/app.js"></script>
	</body>

</html>

<?php } ?>