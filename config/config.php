<?php

namespace config;

use app\core\Config;

// config BD
const DSN = "mysql:host=localhost;dbname=home"; 
const USER = "root";
const PASSWORD = "";
const DB_CHAR = "utf8mb4";

// hostname
DEFINE("HOSTNAME", "/nemminiframework");
DEFINE("URL", $_SERVER["HTTP_HOST"].HOSTNAME);
DEFINE("VIEWS", ROOT."/app/views");
DEFINE('PUBLIC_', ROOT."/public");
DEFINE("ASSETS", HOSTNAME."/public/assets");

$config = Config::getInstance();
//configurando mi proyecto
$config->set("APP_ROOT", dirname(__FILE__, 2)."/app/");
$config->set("VIEWS_FOLDER", "views/");
$config->set("MODELS_FOLDER", "models/");
$config->set("CONTROLLERS_FOLDER", "controllers/");
$config->set("DEFAULT_CONTROLLER", "Home");
$config->set("DEFAULT_ACTION", "index");

