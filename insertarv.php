<?php
session_start();
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="cuenta";
$db_table_name="cuentas";
$db_connection = mysqli_connect($db_host, $db_user, $db_password,$db_name);

$Juegos=$_POST['Juegos'];
$Fecha=$_POST['Fecha'];
$idu=$_SESSION["Id"];

$sqlj="SELECT IdJ  FROM juego WHERE Nombrej='$Juegos'";
$queryj=mysqli_query($db_connection,$sqlj);

$num_rows = mysqli_num_rows($queryj);
        if ($num_rows!=0) {
            $row = mysqli_fetch_array($queryj);

            $idj=$row['IdJ'];
        }


$sql="INSERT INTO `venta`(`Fecha`, `IdJ`, `IdU`) VALUES('$Fecha','$idj','$idu')";
$query= mysqli_query($db_connection,$sql);

if($query){
    Header("Location: venta.php");
    
}else {
}
?>