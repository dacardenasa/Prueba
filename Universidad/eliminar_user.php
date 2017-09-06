<?php 
 include("Include/config.php");
 $cedula = $HTTP_POST_VARS[cedula];
 $TBname = "alumnos";
 //$consulta = "DELETE * FROM  alumnos WHERE codigo = $codigo";
 mysql_query("DELETE FROM  alumnos WHERE cedula = $cedula",$con_db) or die ("Resultado=".urlencode(mysql_error()));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminar</title>
</head>

<body background="Imagenes/fondo_sena_01.png">
  <?php if (isset($cedula)){
  
   echo("<table width='400' align='center'><tr><td bgcolor='#669963'><div align='center'><strong>");
   echo("Datos eliminados correctamente del sistema.</strong></div></td></tr><tr><td bgcolor='#669963'>");
   echo("<div align='center'><a href='fondo.html'><strong>Volver al inicio</strong></a></div></td></tr></table>");
	}
  
  ?>
</body>
</html>
