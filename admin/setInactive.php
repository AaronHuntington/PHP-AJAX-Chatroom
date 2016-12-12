<?php
    require_once("../includes/config.php");
    include(INCLUDES_ROOTPATH."/init.php");

    $set_inactive = new chatroom;
    $key = $_GET['key'];

    $set_inactive->setChatroom_inActive($key);

    header("Location: index.php");


?>