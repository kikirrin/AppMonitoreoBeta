<!DOCTYPE HTML>
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
<style>
    .ui-li-static.ui-collapsible > .ui-collapsible-heading {
        margin: 0;
    }
    .ui-li-static.ui-collapsible {
        padding: 0;
    }
    .ui-li-static.ui-collapsible > .ui-collapsible-heading > .ui-btn {
        border-top-width: 0;
    }
    .ui-li-static.ui-collapsible > .ui-collapsible-heading.ui-collapsible-heading-collapsed > .ui-btn,
    .ui-li-static.ui-collapsible > .ui-collapsible-content {
        border-bottom-width: 0;
    }
</style>
<div data-role="page" id="page" data-title="Monitoreo de medios" data-theme="c">

    <div data-role="header" >
        <a href="home.php" class="ui-btn ui-btn-left ui-btn-icon-notext ui-btn-corner-all ui-icon-home" data-direction = "back"></a>

        <h1>Prensa escrita</h1>
        <a href="" class="ui-btn ui-btn-right ui-btn-icon-notext ui-btn-corner-all ui-icon-refresh" onclick='getNotas();' ></a>
    </div><!-- /header -->
    <div data-role="content" >
        <form action="" method="post" id="form" name="form" >


            <ul data-role="listview" data-theme="a" class="ui-listview-outer" id="listaNotasPrensa" data-corners="false">

            </ul>

            <!--            <ul data-role="listview" data-filter="true" data-theme="a"  class="ui-listview-outer" id="listaNotasPrensa">-->
            <!--<li data-role="collapsible">
                                <h2>Birds</h2>
                                <ul data-role="listview" data-corners="false">
                                    <li>Condor</li>
                                    <li>Eagle</li>
                                    <li>Sparrow</li>
                                </ul>
                            </li>-->





            </ul>


        </form>
        <script>
            $(document).on("pagebeforecreate", function() {
                getNotas();
            });





            function getNotas() {

                $.mobile.loading("show");     
                $("#listaNotasPrensa").html("");
                $.ajax({
                    cache: false,
                    type: 'POST',
                    url: 'monitoreo.morelos.gob.mx/mobile/beta/controlNotasApp.php',
                    dataType: 'jsonp',
                    data: {
                        accion: "getNotasPeriodico"

                    },
                    success: function(json) {


                        if (json === "error") {
                            alert("errorEnResultado");
                        } else {

                            var html = "";
                            var NotasDiario = json.notasDiario;
                            var htmlDiario = "";
                            var NotasUnion = json.notasUnion;
                            var htmlUnion = "";
                            var NotasJornada = json.notasJornada;
                            var htmlJornada = "";
                            var NotasRegional = json.notasRegional;
                            var htmlRegional = "";
                            var NotasSolCuerna = json.notasSolCuernavaca;
                            var htmlSolCuerna = "";
                            var NotasSolCuautla = json.notasSolCuautla;
                            var htmlSolCuautla = "";
                            if (NotasDiario == "") {
                            } else {
                                htmlDiario = '<li data-role="collapsible" data-corners="false" class="first-divider"><h2>El Diario de Morelos<span class="ui-li-count ui-body-inherit">' + NotasDiario.length + '</span></h2><ul data-role="listview" data-theme="a" class="lista-prensa" data-corners="false">';
                                for (var i = 0; i < NotasDiario.length; i++) {
                                    htmlDiario += '<li id="' + NotasDiario[i]['id'] + '" data-theme="b">';
                                    htmlDiario += '<a href = "NotaPrensa.php?id=' + NotasDiario[i]['id'] + '" >';
                                    htmlDiario += '<img src = "' + NotasDiario[i]['Foto'] + '" >';
                                    htmlDiario += '<h3>' + NotasDiario[i]['Nombre'] + '</h3>';

                                    htmlDiario += '<p> <br >' + cutStringNotHalfWords(NotasDiario[i]['Contenido'], 250, ' ', ' ...');
                                    htmlDiario += '</p>';
                                    htmlDiario += '</a>';
                                    htmlDiario += '</li>';

                                }
                                htmlDiario += '</ul></li>';
                            }

                            if (NotasUnion == "") {

                            } else {

                                htmlUnion = '<li data-role="collapsible" data-corners="false" class="divider-list"><h2>La Unión de Morelos<span class="ui-li-count ui-body-inherit">' + NotasUnion.length + '</span></h2><ul data-role="listview" data-theme="a" class="lista-prensa" data-corners="false">';
                                for (var i = 0; i < NotasUnion.length; i++) {
                                    htmlUnion += '<li id="' + NotasUnion[i]['id'] + '" data-theme="b">';
                                    htmlUnion += '<a href = "NotaPrensa.php?id=' + NotasUnion[i]['id'] + '" >';
                                    htmlUnion += '<img src = "' + NotasUnion[i]['Foto'] + '">';
                                    htmlUnion += '<h3>' + NotasUnion[i]['Nombre'] + '</h3>';

                                    htmlUnion += '<p> <br >' + cutStringNotHalfWords(NotasUnion[i]['Contenido'], 250, ' ', ' ...');
                                    htmlUnion += '</p>';
                                    htmlUnion += '</a>';
                                    htmlUnion += '</li>';

                                }
                                htmlUnion += '</ul></li>';
                            }
                            if (NotasJornada == "") {

                            } else {

                                htmlJornada = '<li data-role="collapsible" data-corners="false" class="divider-list"><h2>La Jornada Morelos<span class="ui-li-count ui-body-inherit">' + NotasJornada.length + '</span></h2><ul data-role="listview" data-theme="a" class="lista-prensa" data-corners="false">';
                                for (var i = 0; i < NotasJornada.length; i++) {
                                    htmlJornada += '<li id="' + NotasJornada[i]['id'] + '" data-theme="b">';
                                    htmlJornada += '<a href = "NotaPrensa.php?id=' + NotasJornada[i]['id'] + '" >';
                                    htmlJornada += '<img src = "' + NotasJornada[i]['Foto'] + '">';
                                    htmlJornada += '<h3>' + NotasJornada[i]['Nombre'] + '</h3>';

                                    htmlJornada += '<p> <br >' + cutStringNotHalfWords(NotasJornada[i]['Contenido'], 250, ' ', ' ...');
                                    htmlJornada += '</p>';
                                    htmlJornada += '</a>';
                                    htmlJornada += '</li>';

                                }
                                htmlJornada += '</ul></li>';
                            }
                            if (NotasRegional == "") {

                            } else {

                                htmlRegional = '<li data-role="collapsible" data-corners="false" class="divider-list"><h2>El Regional del Sur<span class="ui-li-count ui-body-inherit">' + NotasRegional.length + '</span></h2><ul data-role="listview" data-theme="a" class="lista-prensa" data-corners="false">';
                                for (var i = 0; i < NotasRegional.length; i++) {
                                    htmlRegional += '<li id="' + NotasRegional[i]['id'] + '" data-theme="b">';
                                    htmlRegional += '<a href = "NotaPrensa.php?id=' + NotasRegional[i]['id'] + '" >';
                                    htmlRegional += '<img src = "' + NotasRegional[i]['Foto'] + '">';
                                    htmlRegional += '<h3>' + NotasRegional[i]['Nombre'] + '</h3>';

                                    htmlRegional += '<p> <br >' + cutStringNotHalfWords(NotasRegional[i]['Contenido'], 250, ' ', ' ...');
                                    htmlRegional += '</p>';
                                    htmlRegional += '</a>';
                                    htmlRegional += '</li>';

                                }
                                htmlRegional += '</ul></li>';
                            }
                            if (NotasSolCuerna == "") {

                            } else {

                                htmlSolCuerna = '<li data-role="collapsible" data-corners="false" class="divider-list"><h2>El Sol de Cuernavaca<span class="ui-li-count ui-body-inherit">' + NotasSolCuerna.length + '</span></h2><ul data-role="listview" data-theme="a" class="lista-prensa" data-corners="false">';
                                for (var i = 0; i < NotasSolCuerna.length; i++) {
                                    htmlSolCuerna += '<li id="' + NotasSolCuerna[i]['id'] + '" data-theme="b">';
                                    htmlSolCuerna += '<a href = "NotaPrensa.php?id=' + NotasSolCuerna[i]['id'] + '" >';
                                    htmlSolCuerna += '<img src = "' + NotasSolCuerna[i]['Foto'] + '">';
                                    htmlSolCuerna += '<h3>' + NotasSolCuerna[i]['Nombre'] + '</h3>';

                                    htmlSolCuerna += '<p> <br >' + cutStringNotHalfWords(NotasSolCuerna[i]['Contenido'], 250, ' ', ' ...');
                                    htmlSolCuerna += '</p>';
                                    htmlSolCuerna += '</a>';
                                    htmlSolCuerna += '</li>';

                                }
                                htmlSolCuerna += '</ul></li>';
                            }
                            if (NotasSolCuautla == "") {

                            } else {

                                htmlSolCuautla = '<li data-role="collapsible" data-corners="false" class="divider-list"><h2>El Sol de Cuautla<span class="ui-li-count ui-body-inherit">' + NotasSolCuautla.length + '</span></h2><ul data-role="listview" data-theme="a" class="lista-prensa" data-corners="false">';
                                for (var i = 0; i < NotasSolCuautla.length; i++) {
                                    htmlSolCuautla += '<li id="' + NotasSolCuautla[i]['id'] + '" data-theme="b">';
                                    htmlSolCuautla += '<a href = "NotaPrensa.php?id=' + NotasSolCuautla[i]['id'] + '" >';
                                    htmlSolCuautla += '<img src = "' + NotasSolCuautla[i]['Foto'] + '">';
                                    htmlSolCuautla += '<h3>' + NotasSolCuautla[i]['Nombre'] + '</h3>';

                                    htmlSolCuautla += '<p> <br >' + cutStringNotHalfWords(NotasSolCuautla[i]['Contenido'], 250, ' ', ' ...');
                                    htmlSolCuautla += '</p>';
                                    htmlSolCuautla += '</a>';
                                    htmlSolCuautla += '</li>';

                                }
                                htmlSolCuautla += '</ul></li>';
                            }
//                            $("#listaNotasPrensa").html(htmlDiario);
                            $("#listaNotasPrensa").html(htmlDiario + htmlUnion + htmlJornada + htmlRegional + htmlSolCuerna + htmlSolCuautla);
                            
                            $("#listaNotasPrensa ul").each(function(){
                                $(this).listview();
                            });
                            $("#listaNotasPrensa > li").each(function(){
                                $(this).collapsible();
                                $(this).collapsible("expand");
                            });
                        }
                    },
                    error: function(resultado) {
                        alert("resultadoerror=" + resultado);
                    }, beforeSend: function() {

                        $.mobile.loading("show");     
                    },
                    complete: function() {
                        $.mobile.loading("hide");

                    },
                });
            }
//


        </script>
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