<?php
include_once "class/classNotas.php";

$clase = new classNotas();
 if (isset($_POST['accion']) && $_POST['accion'] == "getNotasPeriodico") {
    
     header('Content-type: application/json; charset=utf-8');
echo $_GET['callback'] . '(' . $clase->getNotasPeriodicoJson() . ')';
        
   
    //header("Location: mapa.php");
} else if (isset($_POST['accion']) && $_POST['accion'] == "getNotasTV") {
    
     header('Content-type: application/json; charset=utf-8');
echo $_GET['callback'] . '(' . $clase->getNotasTVJson() . ')';
   
    //header("Location: mapa.php");
} else if (isset($_POST['accion']) && $_POST['accion'] == "getNotasRadio") {
    header('Content-type: application/json; charset=utf-8');
echo $_GET['callback'] . '(' . $clase->getNotasRadioJson() . ')';
     
     
   
    //header("Location: mapa.php");
} else if (isset($_POST['getCapas'])) {
    
}

?>
