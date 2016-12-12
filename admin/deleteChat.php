<?php
    require_once("../includes/config.php");
    include(INCLUDES_ROOTPATH."/init.php");
    
    $delete_chat = new chatroom;
    $key = $_GET['key'];

    $delete_chat->delete_chatroom_switch($key);
    $delete_chat->delete_chatrooms($key);

    header("location: index.php");
?>