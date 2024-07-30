<?php

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="cuenta";
$db_table_name="cuentas";
$db_connection = mysqli_connect($db_host, $db_user, $db_password,$db_name);

$idj=$_GET['id'];

$sql="DELETE FROM juego  WHERE IdJ='$idj'";
$query=mysqli_query($db_connection,$sql);

    if($query){
        Header("Location: Juego.php");
    }
?>