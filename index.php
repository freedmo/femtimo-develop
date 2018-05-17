<?php

require_once "vendor/autoload.php";

use femtimo\engine\Kernel;

$application = new Kernel(
    "view" /* Folder for view */,
    "Project\\Controller\\" /* Namespace from Controller */,
    "Project\\Components\\" /* Folder for autoloaded class by DI-Container */,
    "Blog" /* Basic controller, which is used as default */,
    "show" /* Basic action of basic controller, which is used as default */,
    "Component" //Component
);

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

$response = $application->handle($request);

if($response){
    $responce->send();
}