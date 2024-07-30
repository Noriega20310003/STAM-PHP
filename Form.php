<?php ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
        
        <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/sc/Css/Stylesheet.css" rel="stylesheet" type="text/css" />
        <title>Registrate</title>
    </head>
<body>
    <div class="header-int">
        <header class="head" role="banner" style="position: fixed;">
            <div class="header-nav-wrapper">
                <div class="header-top-container">
                    <div class="header-top">                            
                            <nav class="nav-select">
                                <ul>    
                                    <li class="nav-back">
                                        <div class="selected-item">
                                            
                                            <?php
                                                session_start();
                                                if(isset($_SESSION["Id"])){
                                                    echo '<a href="Endsesion.php" tabindex="0" role="button" data-pid="HBMX:ab:B0:HM:05:2006:020:" data-pid-action="clicktrought"> '.$_SESSION["Nombre"];' </a>';
                                                }else{
                                                    
                                                    echo '<a href="login.html" tabindex="0" role="button" data-pid="HBMX:ab:B0:HM:05:2006:020:" data-pid-action="clicktrought">Iniciar secion</a>';
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
    <div class="dicenter">
        <section>
            <a href="/login.html">
                Login
            </a>
        </section>
        <section class="marginL">
            <form action="/registrar.php" method="post">
                <div class="form_tab">
                    <div class="stepHeader" data-a11y-focus="true" >
                        <h1 class="stepTitle" data-uia="stepTitle">Registra tu cuenta</h1>
                    </div>
                    <ul class="simpleForm structural ui-grid">
                        <li  class="nfFormSpace">
                            <div  class="nfInput nfInputOversize">
                                <div class="nfInputPlacement">
                                    <label class="input_id" placeholder="firstName">
                                        <input name="Nombre" class="nfTextField" id="id_firstName" type="text"  maxlength="100" minlength="1">
                                        <label for="id_firstName" class="placeLabel1">Nombre</label>
                                    </label>
                                </div>
                            </div>
                        </li>
                        <li  class="nfFormSpace">
                            <div class="cardNumberContainer">
                                <div class="nfInput nfInputOversize">
                                    <div class="nfInputPlacement">
                                        <label class="input_id" placeholder="creditCardNumber">
                                            <input name="Correo" class="nfTextField" id="id_Correo" type="email"  maxlength="100" minlength="1" >
                                            <label for="id_Correo" class="placeLabel1">Correo electronico</label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li  class="nfFormSpace">
                            <div class="cardNumberContainer">
                                <div class="nfInput nfInputOversize">
                                    <div class="nfInputPlacement">
                                        <label class="input_id" placeholder="creditCardNumber">
                                            <input name="Cont" class="nfTextField" id="id_Cont" type="password"  maxlength="19" minlength="1" >
                                            <label for="id_Cont" class="placeLabel1">Contraseña</label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="submitBtnContainer">
                    <button type="submit"  class="nf-btn nf-btn-primary nf-btn-solid nf-btn-oversize" placeholder="">Guardar</button>
                </div>
            </form>
        </section>
    </div>
</body>