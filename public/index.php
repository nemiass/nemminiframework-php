<?php
declare(strict_types=1);
use app\core\App;

require_once("../config/autoload.php");
require_once("../config/config.php");

$myApp = new App;
$myApp->run();
