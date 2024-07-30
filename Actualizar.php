<?php 
    

$id=$_GET['id'];


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
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
                                                session_start();
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
                    <form action="editar.php" method="POST">
                    
                                <input type="hidden" name="IdJ" value="<?php echo $id ?>">
                                
                                <input type="text" class="form-control mb-3" name="NombreJ" placeholder="Nombre">
                                <input type="text" class="form-control mb-3" name="Precio" placeholder="Precio">
                                <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>