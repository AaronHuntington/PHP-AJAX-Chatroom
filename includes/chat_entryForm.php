<?php
    // if(isset($_GET["emply"])){
    //     echo '<input id="chatName" type="text" value="'.$_GET["emply"].'" style="display: none;"/>';
    // } else {
    //     echo '<input id="chatName" type="text" value="'.$_GET["chat_name"].'" style="display: none;"/>';
    // }
?>


<input id="chatKey" type="hidden" value="<?php echo $key; ?>"/>
<input id="chatName" type="hidden" value="<?php echo $guest;?>"/>
<input id="message" type="text" placeholder="Enter Message" class="col-md-10"/>
<div class="col-md-2">
    <input type="submit" id="chatroom_sendbtn" onclick="sendMessage()"value="Send"/>
</div>