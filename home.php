<!DOCTYPE HTML>
<html><head>
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
    <body>

<div data-role="page" id="Home" name="Home" data-title="Monitoreo de medios" data-theme="a">
    <div data-role="header" data-position="fixed" data-theme="c" >
        <h1>Bienvenido</h1>


        <a id="close" name="close" class="ui-btn ui-btn-right ui-btn-icon-notext ui-btn-corner-all ui-icon-power" ></a>
        
    </div>
    <div data-role="content" align="center">
        <form action="" method="post" id="formHome" name="formHome">
            <br><br><br>
            <center><img align="center" src="images/escudo.png" class="imagen-grande"></center>
        </form>
    </div>

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