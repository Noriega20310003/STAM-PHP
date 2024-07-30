<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="cuenta";
$db_table_name="cuentas";
$db_connection = mysqli_connect($db_host, $db_user, $db_password,$db_name);

$Descripcion=$_POST['Descripcion'];
$NombreJ=$_POST['NombreJ'];
$Precio=$_POST['Precio'];


$sql="INSERT INTO `juego`(`Nombrej`, `Precio`, `Descripcion`) VALUES('$NombreJ','$Precio','$Descripcion')";
$query= mysqli_query($db_connection,$sql);

if($query){
    Header("Location: Juego.php");
    
}else {
}
?>