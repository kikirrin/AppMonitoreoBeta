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
<div data-role="page" id="pageSintesis" data-title="Monitoreo de medios">
    <div data-role="header" data-theme="c">
        <a href="home.php" data-icon = "home" data-iconpos="notext" data-direction = "back" data-theme="e">Regresar</a>
        <h1>Síntesis digital</h1>
        <a href="" class="ui-btn ui-btn-right ui-btn-icon-notext ui-btn-corner-all ui-icon-refresh" onclick='reload();' ></a>
    </div><!-- /header -->
    <div data-role="content">
        <form action="" method="post" id="formSintesis" align="center">



        </form>


        <script>

            $(document).one("pagebeforecreate", function() {
                getPeriodicos();
               
            });

            function getPeriodicos() {

                $("#formSintesis").html("");
                $.ajax({
                    cache: false,
                    async: false,
                    type: 'GET',
                    url: 'http://mailmorelos.gob.mx/sintesis/verificacionArchivos.php',
                    dataType: 'jsonp',
                    contentType: 'application/json',
                    data: {
                        accion: "getJsonPeriodicos"

                    },
                    success: function(json) {
                        if (json.diariomorelos)
                            $("#formSintesis").append('<a id="diariomorelos" style="text-decoration: none;" href="http://mailmorelos.gob.mx/sintesis/periodicos/' + json.fecha + '/diariomorelos.pdf" target="_blank" data-theme="c" ><img src="images/diario.png"  width="103" height="133" class="periodico-icon"></a>');

                        if (json.unionmorelos)
                            $("#formSintesis").append('<a id="unionmorelos" style="text-decoration: none;" href="http://mailmorelos.gob.mx/sintesis/periodicos/' + json.fecha + '/unionmorelos.pdf" target="_blank" data-theme="c" ><img src="images/union.png"  width="103" height="133" class="periodico-icon"></a>');

                        if (json.jornadamorelos)
                            $("#formSintesis").append('<a id="jornadamorelos" style="text-decoration: none;" href="http://mailmorelos.gob.mx/sintesis/periodicos/' + json.fecha + '/jornadamorelos.pdf" target="_blank" data-theme="c" ><img src="images/jornada.png"  width="103" height="133" class="periodico-icon"></a>');

                        if (json.regionalmorelos)
                            $("#formSintesis").append('<a id="regionalmorelos" style="text-decoration: none;" href="http://mailmorelos.gob.mx/sintesis/periodicos/' + json.fecha + '/regionalmorelos.pdf" target="_blank" data-theme="c" ><img src="images/regional.png"  width="103" height="133" class="periodico-icon"></a>');

                        if (json.solesmorelos)
                            $("#formSintesis").append('<a id="solesmorelos" style="text-decoration: none;" href="http://mailmorelos.gob.mx/sintesis/periodicos/' + json.fecha + '/solesmorelos.pdf" target="_blank" data-theme="c" ><img src="images/soles.png"  width="103" height="133" class="periodico-icon"></a>');

                        if (json.capitalmorelos)
                            $("#formSintesis").append('<a id="capitalmorelos" style="text-decoration: none;" href="http://mailmorelos.gob.mx/sintesis/periodicos/' + json.fecha + '/capitalmorelos.pdf" target="_blank" data-theme="c" ><img src="images/caudillo.png"  width="103" height="133" class="periodico-icon"></a>');

                        if (json.nacional)
                            $("#formSintesis").append('<a id="nacional" style="text-decoration: none;" href="http://mailmorelos.gob.mx/sintesis/sintesisnacional/SintesisNacional_' + json.fechaN + '.pdf" target="_blank" data-theme="c" ><img src="images/nacional.png"  width="103" height="133" class="periodico-icon"></a>');

                    },
                    error: function(resultado) {

                    }, complete: function(json) {

                    }
                });



            }


            function reload() {
                getPeriodicos();
            }
        </script>
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