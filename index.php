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
    <body>
    <div data-role="page" id="Login" data-title="Login" data-theme="a">
        <script type="text/javascript">
           
        </script>  
        <div data-role="header" class="ui-header-fixed">
            <h1>Monitoreo</h1>
           
        </div>
        <div data-role="content"><br><br>
            
            <form action="login.php" method="post" align="center" id="formIndex" name="formIndex">
                <div class="ui-field-contain field-no-border">
                    <label for="username">Usuario:</label>
                    <input type="text" name="username" id="username" placeholder="Nombre de usuario" autofocus required />
                </div>

                <div class="ui-field-contain field-no-border">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" value="" placeholder="Introduzca su contraseña" required />
                </div>
                <center><img align="center" src="images/escudo.png" style="max-width: 70%"></center>
                <input type="submit" id="boton" name="boton" value="Entrar">
            </form>

        </div>
        <div data-role="footer" class="ui-footer-fixed" >
            <h5>Gobierno del Estado de Morelos</h5>
        </div>


    </div>
</body>




</html>