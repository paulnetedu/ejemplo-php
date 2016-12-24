<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo de envio de formularios - Envio</title>
</head>
<body>
	<form method="POST" action="envio_respuesta.php">
		<table>
			<tr> 
				<td> Nombre </td>
				<td> <input type=”text” name="nombre"> </td>
			</tr>
			<tr> 
				<td> Carrera </td>
				<td> 
					<select name="carrera">
						<option value="11 Administracion">Administraci&oacute;n</option>
						<option value="12 Derecho">Derecho</option>
						<option value="13 Sistemas">Sistemas</option>
					</select> 
				</td>
			</tr>
			<tr> 
				<td> Nombre </td>
				<td> 
					<input type="radio" name="genero" value="M" checked> Masculino <br>
					<input type="radio" name="genero" value="F" > Femenino 
				</td>
			</tr>
			<tr> 
				<td> Nombre </td>
				<td> 
					<input type="checkbox" name="idiomas[]" value="ES" checked> Espa&nacute;ol  <br>
					<input type="checkbox" name="idiomas[]" value="EN" > Ingl&eacute;s
					<input type="checkbox" name="idiomas[]" value="FR" > Franc&eacute;s
				 </td>
			</tr>
			<tr> 
				<td> Observaciones </td>
				<td> <textarea name="observaciones" cols="40" rows="5"> </textarea>
			</tr>
			
		</table>
		
		<br> <input value="Enviar" type="submit"><br>
	</form>
</body>
</html>