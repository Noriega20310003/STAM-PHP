<?php

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="cuenta";
$db_table_name="cuentas";
$db_connection = mysqli_connect($db_host, $db_user, $db_password,$db_name);

$Idj=$_POST['IdJ'];
$Nombre=$_POST['NombreJ'];
$Precio=$_POST['Precio'];
$Descripcion=$_POST['Descripcion'];

$sql="UPDATE juego SET  Nombrej='$Nombre',Precio='$Precio',Descripcion='$Descripcion' WHERE IdJ='$Idj'";
$query=mysqli_query($db_connection,$sql);

    if($query){
        Header("Location: juego.php");
    }
?>