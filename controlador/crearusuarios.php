<?php
try {
    require_once 'modelo/usuarios.php';
    $usuarios = new Usuarios();
    $usuarios->crear();
    if ($usuarios->getMensaje()) {
        echo $usuarios->getMensaje();
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
