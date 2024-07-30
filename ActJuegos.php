<?php 
    session_start();
    $db_host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="cuenta";
    $db_table_name="cuentas";
    $db_connection = mysqli_connect($db_host, $db_user, $db_password,$db_name);
    if(isset($_SESSION["Id"])){
    $idu=$_SESSION['Id'];
    
    $sqlj="SELECT * FROM juego";
    $queryj=mysqli_query($db_connection,$sqlj);

    $sql="SELECT v.IdV, v.Fecha, j.Nombrej FROM venta=v, juego=j WHERE v.IdJ=j.IdJ && v.IdU='$idu' ORDER BY j.Nombrej";
    $query=mysqli_query($db_connection,$sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Pagina Juego</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="/sc/Css/Stylesheet.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <div class="header-int">
        <header class="head" role="banner" style="position: fixed;">
            <div class="header-nav-wrapper">
                <div class="header-top-container">
                    <div class="header-top">
                        
                            <nav class="nav-main">
                                <ul>
                                    <li class="Header_top_Navegation">
                                    <a href="Juego.php" >
                                        Juegos
                                    </a>
                                    </li>
                                    <li class="Header_top_Navegation">
                                    <a href="venta.php">
                                        Ventas
                                    </a>
                                    </li>
                                    <li class="Header_top_Navegation">
                                    <a href="ActJuegos.php" >
                                        Juegos Comprados
                                    </a>
                                    </li>
                                </ul>
                            </nav>
                            
                            <nav class="nav-select">
                                <ul>    
                                    <li class="nav-back">
                                        <div class="selected-item">
                                            
                                        <?php
                                                    if(isset($_SESSION["Id"])){
                                                            ?>
                                                         <a href="Endsesion.php" tabindex="0" role="button" data-pid="HBMX:ab:B0:HM:05:2006:020:" data-pid-action="clicktrought"> <?php echo $_SESSION["Nombre"]; ?></a>
                                                    <?php
                                                    }else{
                                                        ?>
                                                        <a href="login.html" tabindex="0" role="button" data-pid="HBMX:ab:B0:HM:05:2006:020:" data-pid-action="clicktrought">Iniciar secion</a>
                                                        <?php
                                                    } 
                                                ?>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
        
            <div class="container " style="padding-top: 90px;">
                    <div class="row"> 
                        <h1>Juegos Adquiridos Por <?php  if(isset($_SESSION["Id"])) echo $_SESSION["Nombre"];?></h1>
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Juego</th>
                                        <th>Usuario</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            if(isset($_SESSION["Id"])){
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Fecha']?></th>
                                                <th><?php  echo $row['Nombrej']?></th>
                                                <th><?php  echo $_SESSION["Nombre"]?></th>                                      
                                            </tr>
                                        <?php 
                                            }
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>