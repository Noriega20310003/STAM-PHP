<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="static/css/bootstrap.min.css">
        <!--css-->
        <link rel="stylesheet" href="static/css/main.css">
       
        <script src="https://unpkg.com/scrollreveal"></script>
<script src="static/js/scrollreveal.min.js"></script>
<script src="static/js/all.js"></script>
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

<section>
    <div class="home1">
<div class="container">
    <div class="row">
        <div class="col">
            
            <h1 style="color: white">Catalogo</h1>
            <p style="color: white;">Top sellers!!!</p>
            <div class="carru">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="2000">
                          <img src="../static/img/c1.jpg" class="d-block w-100" alt="..."style="height: 450px;">
                          <div class="carousel-caption d-none d-md-block">
                          </div>
                        </div>
                        <div class="carousel-item" data-interval="2000">
                          <img src="../static/img/c2.jpg" class="d-block w-100" alt="..."style="height: 450px;">
                          <div class="carousel-caption d-none d-md-block">
                          </div>
                        </div>
                        <div class="carousel-item" data-interval="2000">
                          <img src="../static/img/c3.jpg" class="d-block w-100" alt="..." style="height: 450px;">
                          <div class="carousel-caption d-none d-md-block">
                          </div>
                        </div>
                        <div class="carousel-item" data-interval="2000">
                          <img src="../static/img/c5.png" class="d-block w-100" alt="..." style="height: 450px;">
                          <div class="carousel-caption d-none d-md-block">
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
            </div>  
        </div>
    </div>
    
</div> 

</section>

<!--section Barra productos-->
<section id="Barra">
  <div class="col-md-15 mt-5">
    <div class="container">
    <div class="row carsl_products_header" style="background-color:blueviolet; text-align: center;"> 
      <div class="container">
        <span style="color: #000000; font-size: 30px; line-height: 40px; font-weight: 70; ">HOT DEAL</span>
      </div>
    </div>
    </div>
      <br>
      <br>
      <br>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="static/js/jquery-3.4.1.min.js"></script>
        <script src="static/js/bootstrap.min.js"></script>
</body>
</html>