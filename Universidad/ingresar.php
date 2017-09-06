<?php 
include("Include/config.php");
$cedula = $HTTP_POST_VARS[cedula];
$nombre = $HTTP_POST_VARS[nombre];
$direccion = $HTTP_POST_VARS[direccion];
$telefono = $HTTP_POST_VARS[telefono];
$semestre = $HTTP_POST_VARS[semestre];
$semestres_c = $HTTP_POST_VARS[semestres_c];
$TBname = "alumnos";
 if (!$cedula || !$nombre || !$direccion || !$telefono || !$semestre || !$semestres_c){
   $exito = "<a href='Registro aprendiz.html'><div align='center'>Digite bien los datos</div></a>";
}
 else
 {
  $consulta = "INSERT INTO $TBname VALUES (NULL,'$cedula ','$nombre','$direccion','$telefono','$semestre','$semestres_c')";
  mysql_query($consulta) or die ("Resultado=".urlencode(mysql_error()));
  $exito = "<div align='center'>El proceso de los datos fue procesado correctamente, bienvenido a la universidad senor ".$nombre."</div>.<br><div align='center'><a href='fondo.html'>Volver al inicio</a></div>";
  
 }
?>

<html>
<head>
  <title>Ingreso de alumnos</title>
</head>
<body background="Imagenes/fondo_sena_01.png">
<table width="100%" border="0">
     <tr>
       <td><table width="400" border="0" align="center">
         <tr>
           <td bgcolor="#669933">
           <div align="center">..::Respuesta Registro::..</div></td>
         </tr>
         <tr>
           <td bgcolor="#FF9900"><?php echo ($exito)?></td>
         </tr>
       </table></td>
     </tr>
   </table>
  
</body>
</html>
   
