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
DEFINE("URL", $_SERVER["HTTP_HOST"].HOSTNAME); // 127.0.0.1/nemminiframework
// ROOT = C:\xampp\htdocs\nemminiframework
DEFINE("ROOT_APP", ROOT."/app");
DEFINE("VIEWS", ROOT_APP."/views");
DEFINE('PUBLIC_', ROOT."/public");
DEFINE("ASSETS", HOSTNAME."/public/assets");

DEFINE("MODELS", ROOT_APP."/models");
DEFINE("CONTROLLERS", ROOT_APP."/controllers");

const DEFAULT_CONTROLLER = "home";
const DEFAULT_ACTION = "index";
