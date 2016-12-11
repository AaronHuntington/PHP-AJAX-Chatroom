<?php
    require_once("../includes/config.php");
    include(INCLUDES_ROOTPATH."/header.php");
?>
<script>
    setInterval(function(){
        updateChatTables();
    },1000);//Updates the chat 1000 millisecond

    function updateChatTables() { 

        // $("#chatSwith_container").html('adsf');

        $.ajax({
            url:'processChatAdmin.php',
            type:'POST',
            success:function(response)
            {
                document.getElementById('chatSwitch_section').innerHTML = response;
            }
        });     
    }
</script>

<!-- <input type="button" value="test" onclick="updateChatTables()" /> -->

<h2 class="text-center">Admin Area</h2>
<section id="chatSwitch_section" class="row">
 <!--    <div id="chatSwitch_container" class="col-md-10 col-md-offset-1 borderRed">
        <div id="chatSwitch_activeBox" class="col-md-6">
        </div>
        <div id="chatSwitch_inactiveBox" class="col-md-6">
        </div>
    </div> -->
</section>

<?php include(INCLUDES_ROOTPATH."/footer.php"); ?>
