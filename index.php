<?php

#EL index: En el mostraremos la salida de las vistas del usuario y tambien atraves de el enviarmos las distintas acciones que el usuario enviee controlador

require_once "controllers/controller.php";
require_once "models/model.php";

$home = new PagesController();
$home -> template();


