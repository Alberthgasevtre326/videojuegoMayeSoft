<?php

//start session on web page
session_start();

//config.php

//Incluir la biblioteca de clientes de Google para el archivo de carga automática de PHP
require_once 'vendor/autoload.php';

//Hacer objeto de Google API Client para llamar a Google API
$google_client = new Google_Client();

//Establecer el ID de cliente de OAuth 2.0 | Copiar "ID DE CLIENTE"
$google_client->setClientId('292099949719-col1t6f8p0klkidu2teefpef84ohcuas.apps.googleusercontent.com');

//Establecer la clave secreta del cliente de OAuth 2.0
$google_client->setClientSecret('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');

//Establecer el URI de redirección de OAuth 2.0 | URL AUTORIZADO
$google_client->setRedirectUri('http://localhost/VideoJuegosMayeSoft/IniciarSesion.php');

//para obtener el correo electrónico y el perfil 
$google_client->addScope('email');

$google_client->addScope('profile');

?>