<?php 
 include("Include/config.php");
 $cedula = $HTTP_POST_VARS[cedula];
 $nombre = $HTTP_POST_VARS[nombre];
 $direccion = $HTTP_POST_VARS[direccion];
 $telefono = $HTTP_POST_VARS[telefono];
 $semestre_actual = $HTTP_POST_VARS[semestre];
 $semestres_cursados = $HTTP_POST_VARS[semestres_c];
 $TBname = "alumnos";
 $consulta = "UPDATE $TBname SET cedula = '$cedula',nombre = '$nombre',direccion = '$direccion', telefono = '$telefono' ,semestre_actual = '$semestre_actual',total_semestre_cursado = '$semestres_cursados' WHERE cedula=$cedula";
 mysql_query($consulta) or die ("Resultado=".urlencode(mysql_error()));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Actualizar</title>
</head>

<body background="Imagenes/fondo_sena_01.png">
  <?php if (isset($cedula)){
  
   echo("<table width='400' align='center'><tr><td bgcolor='#669963'><div align='center'><strong>");
   echo("Datos actualizados correctamente señor ".$nombre." .</strong></div></td></tr><tr><td bgcolor='#669963'>");
   echo("<div align='center'><a href='fondo.html'><strong>Volver al inicio</strong></a></div></td></tr></table>");
	}
  
  ?>
</body>
</html>
