<?php
    require_once('../controladores/Cinsercion.php');
    $objinsercion = new Cinsercion();
    $resultado = $objinsercion->cInsertar();
    echo $resultado;
?>