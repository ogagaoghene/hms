<?php

namespace app\config;

define('PROJECT_DOCUMENT_ROOT', dirname(__DIR__));
define('URLROOT', ($_SERVER['HTTP_HOST'] == 'localhost')?'http://localhost/hms':$_SERVER['HTTP_HOST']);
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
