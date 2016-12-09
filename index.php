<?php
    require_once("/includes/config.php");
    include(INCLUDES_ROOTPATH."/header.php");
?>
<section class="row borderRed">
    <h2 class="text-center">Home Page</h2>
    <div class="col-md-10 col-md-offset-1">
        <h4 class="text-center">
            <a href="<?php echo BASE_URL; ?>admin/">Admin</a>
        </h4>
        <h3 class="text-center">Enter Chatroom as Guest</h3>
        <form method="get" action="chatroom.php" class="col-md-5 col-md-offset-3" target="_blank">
            <input id="name" name="guest" type="text" placeholder="Enter Name" class="col-md-12" required/>
            <input type="submit" id="chatroom_sendbtn" onclick="sendMessage()" value="Chat" class="btn btn-secondary"/>
        </form> 
    </div>
</section>  
<?php include(INCLUDES_ROOTPATH."/footer.php"); ?>