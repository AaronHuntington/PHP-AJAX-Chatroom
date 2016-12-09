<?php
    require_once("../includes/config.php");
    include(INCLUDES_ROOTPATH."/header.php");

    $switch = new chatroom_switch;
    $switch = $switch->chatroom_switch_update();

    echo '<pre>';
    // var_dump($switch);


    echo '<br><br><br>';


    foreach($switch as $chatroom){
        
        $guestName  = $chatroom['guest_name'];
        $key        = $chatroom['the_key'];
        $switch     = $chatroom['switch'];

        echo $chatroom['guest_name'];
        echo '<br>';
        echo $chatroom['the_key'];
        echo '<br>';
        echo $chatroom['switch'];
        echo '<br>';
        echo '<a href="'.BASE_URL.'chatroom.php?emply=John%20Doe&susi='.$key.'" target="_blank">CHAT</a>';
        echo '<br><br><br>';
        echo '<hr>';
    }
?>



