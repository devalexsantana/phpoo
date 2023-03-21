<?php

use App\Classes\Parameters;
use App\Classes\Template;

$template = new Template();
$twig = $template->init();

$twig->addFunction($site_url);





/**
 * CHamando o controller
 */
$callController = new App\Controllers\Controller;
$calledController = $callController->Controller();
$controller = new $calledController;

/**
 * Iniciando a Twig (view) no controller por meio do extends no controller.
 */

$controller->setTwig($twig);

/**
 * Chamando o methodo
 */
$callMethod = new App\Controllers\Method;
$method = $callMethod->method($controller);


/**
 * Pegando Parametros da URI
 */

$parameters = new Parameters();
$parameter = $parameters->getParameterMethod($controller, $method);

/**
 * Instanciando o controller e o meotod chamados na URL
 */
$controller->$method($parameter);

