<?php

use App\Paraiso\model\CatalogoModel as CatalogoModel;

$objeto = new CatalogoModel();

if (isset($_GET['type'])) {

    if ($_GET['type'] === 'registrar') {

        if (isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['curso']) && isset($_POST['nota'])){

            $objeto->getUser($_POST['nombre'], $_POST['correo'], $_POST['curso'], $_POST['nota']);

            $nota = $objeto->validar();

        }
        include 'app/view/catalogoView.php';
    } else {
        die("Error 404");
    }
} else {
            include 'app/view/catalogoView.php';

} 
