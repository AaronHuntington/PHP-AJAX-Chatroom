<?php
    require_once("config.php");
    require_once(INCLUDES_ROOTPATH."init.php");

    /***********************************/
    //Sending message to database - START
    if(isset($_POST["message"])){
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
    }
    //Sending message to database - END
    /**********************************/

    /*****************************************/
    //Retrieving message from database - START
    if(isset($_POST['chatKey'])){
        $chatroom = new chatroom;
        $key = $_POST['chatKey'];

        $messages = $chatroom->get_chatMessages_byKey($key);

        echo '<pre>';
        // var_dump($messages);


        foreach($messages as $message){
            $date       = $message[1];
            $name       = $message[2];
            $message    = $message[4];

        }




    }
    //Retrieving message from database - END
    /*****************************************/
?>
