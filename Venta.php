<?php 
    session_start();
    $db_host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="cuenta";
    $db_table_name="cuentas";
    $db_connection = mysqli_connect($db_host, $db_user, $db_password,$db_name);

    $sqlj="SELECT * FROM juego";
    $queryj=mysqli_query($db_connection,$sqlj);

    $sql="SELECT v.IdV, v.Fecha, j.Nombrej, c.Nombre FROM venta=v, juego=j,cuentas=c WHERE v.IdJ=j.IdJ && V.IdU=c.Id ORDER BY v.IdU";
    $query=mysqli_query($db_connection,$sql);
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
            <div class="container" style="padding-top: 90px;">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertarv.php" method="POST">
                                    <input list="Juegos" name="Juegos">
                                    <datalist id="Juegos">
                                        <?php
                                            while($rowj=mysqli_fetch_array($queryj)){
                                        ?>
                                            <option value="<?php echo $rowj['Nombrej']?>">
                                                <?php
                                            }
                                        ?>
                                    </datalist>
                                    <input type="text" class="form-control mb-3" name="Fecha" placeholder="Fecha">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Fecha</th>
                                        <th>Juego</th>
                                        <th>Usuario</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IdV']?></th>
                                                <th><?php  echo $row['Fecha']?></th>
                                                <th><?php  echo $row['Nombrej']?></th>
                                                <th><?php  echo $row['Nombre']  ?></th>
                                                <th><a href="Eliminarv.php?id=<?php echo $row['IdV'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>