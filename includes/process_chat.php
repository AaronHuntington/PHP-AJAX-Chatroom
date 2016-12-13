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
        $person = $_POST['name'];

        $messages = $chatroom->get_chatMessages_byKey($key);

        // echo '<pre>';
        // var_dump($messages);


        foreach($messages as $message){
            $date       = $message[1];
            $name       = $message[2];
            $message    = $message[4];

            if($person == $name){
                echo '<div id="firstPerson_chat" class="clearfix">';
                echo '<p class="pull-right">';
                echo $message;
                echo '<br><span class="pull-right">12:00 Dec25</span>';
                echo '</p>';
                echo '</div>';
            } else {
                echo '<div id="secondPerson_chat" class="clearfix">';
                echo '<h3>'.$name.'</h3>';
                echo '<p class="pull-left">';
                echo $message;
                echo '<br><span class="pull-right">12:00 Dec25</span>';
                echo '</p>';
                echo '</div>';
            }
        }




    }
    //Retrieving message from database - END
    /*****************************************/
?>
