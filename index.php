<?php

require_once "models/enlaces.php";
require_once "models/ingreso.php";

require_once "controllers/ingreso.php";
require_once "controllers/template.php";
require_once "controllers/enlaces.php";
//

require_once "controllers/usuariosControllers.php";
require_once "models/usuariosModels.php";

$template = new TemplateController();
$template -> template();
