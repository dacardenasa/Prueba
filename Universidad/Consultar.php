<?php 
include("Include/config.php");
$cedula = $HTTP_POST_VARS[cedula];
$TBname="alumnos";
$consulta = mysql_query("SELECT codigo,cedula,nombre,direccion,telefono,semestre_actual,total_semestre_cursado
           FROM $TBname WHERE cedula = $cedula",$con_db);
		   $resultado = mysql_fetch_array($consulta);
		   $codigo = $resultado["codigo"];
		   $cedula = $resultado["cedula"];
		   $nombre = $resultado["nombre"];
		   $direccion = $resultado["direccion"];
		   $telefono = $resultado["telefono"];
		   $semestre_actual= $resultado["semestre_actual"];
		   $semestre_total_cursado = $resultado["total_semestre_cursado"];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Busqueda de alumnos</title>
</head>
<body background="Imagenes/fondo_sena_01.png">
<table width="100%" border="0" align="center">
<tr>
    <td>
    <form name="Consultar.php" method="post">
      <table width="400" border="0" align="center">
        <tr>
          <td bgcolor="#669933"><div align="center">No Identificacion</div></td>
        </tr>
        <tr>
          <td bgcolor="#FF9900">
            <div align="center">
              <input type="text" name="cedula" id="cedula" />
              </div>
        </td>
        </tr>
        <tr>
          <td bgcolor="#FF9900"><label>
            <div align="center">
              <input type="submit" name="button2" id="button2" value="Buscar" />
              </div>
          </label></td>
        </tr>
      </table>
    </form>
    <br>
    
        <?php 
		    if (isset($cedula))
		           {
		   ?>
  <table width="51%" border="1" align="center">
      <tr>
        <td colspan="3" bgcolor="#669933"><div align="center">REGISTRO ALUMNO</div></td>
        </tr>
      <tr>
        <td width="41%" bgcolor="#FF9900"><div align="left">CEDULA</div></td>
        <td width="33%" bgcolor="#FF9900">
          <div align="center">
            <input type="text" name="cedula" id="cedula"  value="<?php  echo ($cedula)?>"/>
            </div>
        </td>
        <td width="26%" rowspan="5" bgcolor="#FF9900"><img src="Imagenes/iconos/Icon 205.png" width="98%" height="129" /></td>
      </tr>
      <tr>
        <td bgcolor="#FF9900"><div align="left">NOMBRE</div></td>
        <td bgcolor="#FF9900">
          <div align="center">
            <input type="text" name="nombre" id="nombre" value="<?php  echo ($nombre)?>"/>
            </div>
       </td>
        </tr>
      <tr>
        <td bgcolor="#FF9900"><div align="left">DIRECCION</div></td>
        <td bgcolor="#FF9900">
          <div align="center">
            <input type="text" name="direccion" id="direccion" value="<?php  echo ($direccion)?>"/>
            </div>
       </td>
        </tr>
      <tr>
        <td bgcolor="#FF9900"><div align="left">TELEFONO</div></td>
        <td bgcolor="#FF9900">
          <div align="center">
            <input type="text" name="telefono" id="telefono" value="<?php  echo ($telefono)?>"/>
            </div>
        </td>
        </tr>
      <tr>
        <td bgcolor="#FF9900"><div align="left">SEMESTRE ACTUAL</div></td>
        <td bgcolor="#FF9900">
          <div align="center">
            <select name="semestre" id="semestre">
           <option value="<?php echo($semestre_actual)?>"><?php echo($semestre_actual)?></option>
            </select>
            </div>
        </td>
        </tr>
      <tr>
        <td bgcolor="#FF9900"><div align="left">SEMESTRES CURSADOS</div></td>
        <td bgcolor="#FF9900">
          <div align="center">
            <select name="semestres_c" id="semestres_c">
            <option value="<?php echo($semestre_total_cursado)?>"><?php echo($semestre_total_cursado)?></option>
            </select>
            </div>
        </td>
        <td bgcolor="#FF9900">
          <input type="text" name="codigo" id="textfield" value="<?php echo($codigo)?>"/>
        </td>
      </tr>
      <tr>
       <td colspan="3" bgcolor="#FF9900">
         <div align="center">
            <strong>Alumno <?php echo($nombre);?> universidad de el tunel</strong>
           </div>
       </td>
       </tr>
    </table>
  <?php 
  }
    else if ($HTTP_POST_VARS[cedula]!=$cedula){
	    
	    echo("<Table align='center' width='400' border=2><tr><td bgcolor='#FF6600'>");
		echo("<div align='center'>El numero de identificacion no existe en la Base de datos</div>");
		echo("</Table></tr></td>");
	}
?>
    <p>&nbsp;</p><td height="62"></td>
  </tr>
</table>
</body>
</html>
