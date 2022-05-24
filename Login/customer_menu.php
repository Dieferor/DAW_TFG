<?php
	session_start();
?>
<!doctype html>
<html lang="es">
	<head>		
		<meta charset="utf-8"/>
		<title> Menú privado </title>		
	</head>	
	<body>
		<?php							
			if( !isset($_SESSION['customer_email'])){
				header('Location: index.pxp');
				exit;				
			}		
			else{			
				$customer_name = $_SESSION['customer_name'];		
				echo "Bienvenido $customer_name <br/>";			
				echo "<br/>";
				echo "<a href='logout.php'>Cerrar sesión</a>";
			}	
		?>
	</body>

</html>