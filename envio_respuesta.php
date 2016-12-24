<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Ejemplo de envio de formularios - Respuesta</title>
</head>
<body>
Datos del alumno: <br> <br>
<?php 
	echo '<table border="1">';
	echo "<tr>";
	echo ("<td>Nombre: </td><td>".$_POST["nombre"]."</td>");
	echo "</tr>";
	echo "<tr>";
	echo ("<td>Carrera: </td><td>".$_POST["carrera"]."</td>");
	echo "</tr>";
	echo "<tr>";
	echo ("<td>Genero: </td><td>".$_POST['genero']."</td>");
	echo "</tr>";
	echo "<tr>";
	echo "<td>Idiomas: </td><td>";
	if(!empty($_POST['idiomas'])) {
	    foreach($_POST['idiomas'] as $check) {
	            echo $check.", "; 
	    }
	}
	echo "</td></tr>";
	echo "<tr>";
	echo ("<td>Observaciones: </td><td>".$_POST["observaciones"]."</td>");
	echo "</tr>";
	echo "</table>";
?>
</body>
</html>