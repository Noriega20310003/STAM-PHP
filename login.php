<?php
session_start();
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="cuenta";
$db_table_name="cuentas";
$db_connection = mysqli_connect($db_host, $db_user, $db_password,$db_name);

if(!$db_connection) {
    echo 'Error de conexion a la BD...'. mysqli_connect_error();
    exit();
}
else{
        

        
    $Cor = utf8_decode($_POST['Correo']);
    $Cont = utf8_decode($_POST['Cont']);
    $insert_value="SELECT * FROM cuentas WHERE correo='$Cor' AND contra='$Cont'";
    $retry_value =mysqli_query($db_connection, $insert_value);

    
    if (!$retry_value)
    {
        echo 'Error en la Consulta.'.mysqli_connect_error();
    }
    else{
        $num_rows = mysqli_num_rows($retry_value);
        if ($num_rows!=0) {
            $row = mysqli_fetch_array($retry_value);

            $_SESSION["newsession"]="a";
            $_SESSION['Id'] = $row['Id'];
            $_SESSION['Nombre'] = $row['Nombre'];
            $_SESSION['Correo'] = $row['Correo'];

            header('Location: inicio.php');
            mysqli_close($db_connection);
        }
        else{
            echo "cuenta no encontrada el usuario o la contraseña son incorrectas";
        }
    }

}

?>