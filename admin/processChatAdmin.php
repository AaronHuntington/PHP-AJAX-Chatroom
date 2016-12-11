<?php
    require_once("../includes/config.php");
    include(INCLUDES_ROOTPATH."/header.php");

    $switch = new chatroom_switch;
    $chat_switch = $switch->chatroom_switch_update();
    $chatrooms = $switch->chatrooms();
?>

    <div id="chatSwitch_container" class="col-md-10 col-md-offset-1 borderRed">
        <div id="chatSwitch_activeBox" class="col-md-6 borderGreen">
            <h3 class="text-center">Active Chatrooms</h3>
            <table class="table table-hover">
                <tr>
                    <th>Name</th>
                    <th>Key</th>
                </tr>
                <?php
                    foreach($chatrooms as $chatroom){
                        $guestName  = $chatroom[1];
                        $key        = $chatroom[2];
                        $switch     = $chatroom[3];

                        if($switch == 1){
                            echo '<tr>';
                            echo '<td>'.$guestName.'</td>';
                            echo '<td>'.$key.'</td>';
                            echo '<td><a href="#">Set Inactive</a></td>';
                            echo '</tr>';
                        }
                    }
                ?>    
            </table>
        </div>
        <div id="chatSwitch_inactiveBox" class="col-md-6 borderBlue">
            <h3 class="text-center">inActive Chatrooms</h3> 
            <table class="table table-hover">
                <tr>
                    <th>Name</th>
                    <th>Key</th>
                </tr>
                <?php
                    foreach($chatrooms as $chatroom){
                        $guestName  = $chatroom[1];
                        $key        = $chatroom[2];
                        $switch     = $chatroom[3];

                        if($switch == 0){
                            echo '<tr>';
                            echo '<td>'.$guestName.'</td>';
                            echo '<td>'.$key.'</td>';
                            echo '<td><a href="#">Delete</a></td>';
                            echo '</tr>';
                        }
                    }
                ?>    
            </table>
        </div>
    </div>


