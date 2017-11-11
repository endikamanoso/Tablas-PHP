
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>tablas</title>
	<style>
		table{
			width: 100%;
			border: 3px black solid;
		}
		td{
			border: 3px black solid;
		}
	</style>
</head>
<body>
	<?php
		if (isset($_GET["columnas"]) && isset($_GET["filas"])) {
			$columnas=$_GET["columnas"];
			$filas=$_GET["filas"];
			echo "<table>";
			for ($i=0; $i < $filas; $i++) { 
				echo "<tr>";
				for ($j=0; $j < $columnas; $j++) { 
					echo "<td>&nbsp;</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}

	  ?>
</body>
</html>