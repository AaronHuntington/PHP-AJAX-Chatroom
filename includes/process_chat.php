<?php
    require_once("config.php");
    require_oncE(INCLUDES_ROOTPATH."init.php");

    $chatMessage = addslashes($_POST["message"]);
    $name = addslashes($_POST["name"]);
    $key = $_POST["key"];
    $date = "12082016";

    $entry = new chatroom;
    
    $entry->name = $name;
    $entry->key = $key;
    $entry->message = $chatMessage;
    $entry->date = $date;

    $entry->enter_message_to_db();
?>
