<?php

$entradaOK = true;

$a_respuesta = [
    'username' => null,
    'descripcion' => null,
    'password' => null
];

$a_errores = [
    'username' => null,
    'descripcion' => null,
    'password' => null,
    'yaExiste' => null
];

if (isset($_REQUEST['cancelar'])) {
    $_SESSION['pagina'] = 'login';
    header('Location: index.php');
}
