<?php
define('DB_SERVER', 'mysql');
define('DB_USERNAME', 'phpcrud');
define('DB_PASSWORD', 'phpcrud');
define('DB_NAME', 'php_crud');

$link = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link->connect_errno) {
    printf("Connect failed: %s\n", $link->connect_error);
    exit();
}
