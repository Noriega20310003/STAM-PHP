<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="cuenta";
$db_table_name="cuentas";
$db_connection = mysqli_connect($db_host, $db_user, $db_password,$db_name);
 
if (!$db_connection) {
 die('No se ha podido conectar a la base de datos');
}

$nom = utf8_decode($_POST['Nombre']);
$Cor = utf8_decode($_POST['Correo']);
$Cont = utf8_decode($_POST['Cont']);


$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`Nombre`, `Contra`,`Correo`) VALUES ( "' . $nom . '", "' . $Cont . '", "' . $Cor . '")';
 
$retry_value = mysqli_query($db_connection,$insert_value);
 
if (!$retry_value) {
   echo 'Error en la Consulta.'.mysqli_connect_error();
   header('Location: Form.php');
}
else{
   echo 'Se realizó correctamente el registro.';
   header('Location: Form.php');
}

mysqli_close($db_connection);
 
?>