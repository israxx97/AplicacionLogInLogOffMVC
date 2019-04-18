<?php

/* require_once 'config/config.php';
  session_start();

  if (isset($_SESSION['usuario']) && !isset($_SESSION['pagina'])) {
  require_once $controladores['inicio'];
  }
  if (isset($_SESSION['pagina'])) {
  require_once $controladores[$_SESSION['pagina']];
  } else {
  require_once $controladores['login'];
  } */


require_once 'config/config.php';
session_start();

if (isset($_SESSION['usuario']) && (!isset($_SESSION['pagina']))) {
    include_once $controladores['inicio'];
}
if (isset($_SESSION['pagina'])) {
    include_once $controladores[$_SESSION['pagina']];
} else {
    include_once $controladores['login'];
}