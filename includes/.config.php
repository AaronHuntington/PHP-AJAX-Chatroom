<?php
    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    define("BASE_URL","/gitHub/PHP-AJAX-Chatroom"); //Enter Base URL Path.
    define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . " ... "); //Enter Document FIle Path.

    // Database Information 
    define('DB_SERVER', ' ... '); //Enter Server Name Here.
    define('DB_DATABASE', ' ... '); //Enter Database name Here.
    define('DB_SERVER_USERNAME', ' ... '); //Enter User Name Here.
    define('DB_SERVER_PASSWORD', ' ... '); //Enter Password Here.
    
    define('INCLUDES_ROOTPATH', ROOT_PATH."includes".DS);
    define('OOP_CLASS_ROOTPATH', ROOT_PATH."includes".DS."oop".DS);
    
?>