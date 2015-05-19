<?php
include_once 'class/classNotas.php';
$clase = new classNotas();
$Nota = $clase->getNotaPrensa($_GET['id']);
?>
<!DOCTYPE html> 
<html>
<head>
        <title>Monitoreo</title> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8" http-equiv="X-UA-Compatible"/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /> 
        <meta name="apple-mobile-web-app-capable" content="yes"/>   
        <link rel="apple-touch-icon" href="images/logoapp.png"/>
        <link rel="shortcut icon" href="images/logoapp.png">
        <link rel="icon" href="images/logoapp.png" />        
        <link rel="stylesheet" href="css/jquery.mobile.css" />
        <link rel="stylesheet" href="css/themes/theme-pink.css" />
        <link rel="stylesheet" href="css/myCSS.css" />
        <script src="js/jquery.js"></script>
        <script src="js/jquery.mobile.js"></script>
        <script src="js/myJS.js"></script>
    </head>
    <div data-role="page" id="page" data-title="Monitoreo de medios">
        <div data-role="header" data-theme="c">
            <a href="" class="ui-btn ui-btn-left ui-btn-icon-notext ui-btn-corner-all ui-icon-back" data-direction="back" data-rel="back"></a>


            <h1>Nota de Prensa</h1>
        </div><!-- /header -->
        <div data-role="content">
            <form action="" method="post" id="form" data-theme="b">

                <img src="<?php echo $Nota['Foto']; ?>" > 
                <h3 align="justify"><?php echo $Nota['Nombre']; ?>
                </h3>
                <p align="justify">


                    <?php echo nl2br($Nota['Contenido']); ?> 
                </p>
            </form>
        </div><!-- /content -->
<div data-role="footer" class="nav-icons" data-theme="a" data-position="fixed">
                <div data-role="navbar" class="nav-icons" data-grid="d" >
                    <ul>
                       <li><a href="listaPrensa.php" class="ui-icon-prensa ui-btn-icon-top">Prensa </a></li>
                      <li><a href="listaRadio.php"  class="ui-btn-active ui-icon-radio ui-btn-icon-top">Radio</a></li>
                      <li><a href="listaTV.php"  class="ui-btn-active ui-icon-tv ui-btn-icon-top">TV</a></li>
                      
                         <li><a href="sintesis.php"  class="ui-btn-active ui-icon-digital ui-btn-icon-top">Síntesis</a></li>
                          <li><a href="portadas.php"  class="ui-btn-active ui-icon-portadas ui-btn-icon-top">Portadas</a></li>
                         </ul>
                </div>
            </div>
        </div>
    </body>
</html>