<?php
    require_once("../includes/config.php");
    include(INCLUDES_ROOTPATH."/header.php");

    $switch = new chatroom_switch;
    $chat_switch = $switch->chatroom_switch_update();
    $chatrooms = $switch->chatrooms();



    echo '<pre>';
    // var_dump($chatrooms);

    echo '<br><br><br>';

    // foreach($chatrooms as $chatroom){
    //     // var_dump($chatroom);
    //     echo 'Name: '.$chatroom[1]."<br>";
    //     echo 'Key: '.$chatroom[2]."<br>";
    //     echo 'Switch: '.$chatroom[3]."<br>";
    //     echo '<br>';
    //     echo '======';
    //     echo '<br>';
    //     // echo $chatroom['key'];
    // }

?>

    <div id="chatSwitch_container" class="col-md-10 col-md-offset-1 borderRed">
        <div id="chatSwitch_activeBox" class="col-md-6 borderGreen">
            <h3 class="text-center">Active Chatrooms</h3>
            <?php
                foreach($chatrooms as $chatroom){
                    echo '<br>';
                    echo 'Name: '.$chatroom[1]."<br>";
                    echo 'Key: '.$chatroom[2]."<br>";
                    echo 'Switch: '.$chatroom[3]."<br>";
                    echo '<br>';
                    echo '======';
                    echo '<br>';
                }
            ?>
        </div>
        <div id="chatSwitch_inactiveBox" class="col-md-6 borderBlue">
            <h3 class="text-center">inActive Chatrooms</h3> 
            <?php
                foreach($chatrooms as $chatroom){
                    echo 'Name: '.$chatroom[1]."<br>";
                    echo 'Key: '.$chatroom[2]."<br>";
                    echo 'Switch: '.$chatroom[3]."<br>";
                    echo '<br>';
                    echo '======';
                    echo '<br>';
                }
            ?>
        </div>
    </div>


