<?php
    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

        

    define("BASE_URL","/gitHub/PHP-AJAX-Chatroom/");
    define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/gitHub/PHP-AJAX-Chatroom/");

    // Database Information 
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'git_chatroom');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    
    define('INCLUDES_ROOTPATH', ROOT_PATH."includes".DS);
    define('OOP_CLASS_ROOTPATH', ROOT_PATH."includes".DS."oop".DS);
    
?>