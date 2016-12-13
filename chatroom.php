<?php
    require_once("/includes/config.php");
    include(INCLUDES_ROOTPATH."/header.php");

    $key_generator = new chatroom;

    if(isset($_GET['guest']) && isset($_GET['susi']) === false){
        $guest = $_GET['guest'];
        $key_generator->key_generator($guest);
    }

    $guest  = $_GET['guest'];
    $key    = $_GET['susi'];
?>

<script type="text/javascript">
    setInterval(function(){
        show_chatMessages();
        // alert('quarter');
    },1000);//Updates the chat 1000 millisecond

    function show_chatMessages() {
        var chatKey = $("#chatKey").val();

        $.ajax({
        url:'includes/process_chat.php',
        type:'POST',
        // data:'chat='+chatText,
        data:{chatKey:chatKey},
        success:function (response)
        {
            $("#chatBox").html(response);
        }
    });
        
    }
</script>

    <section class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center">Quack</h1>
            <div id="chat_container" class="col-md-10 col-md-offset-1 borderRed">
                <h3>Greetings <?php echo $guest;?>! We will be right with you shortly.</h3>
                <div id="chatBox" class="" style="height: 440px; overflow-y: scroll;">

                    <div id="firstPerson_chat">
                    </div>

                    <div id="secondPerson_chat">
                    </div>


                    <?php


                    







                    ?>
                </div>
            </div>
            <div id="chat_entry_container" class="col-md-10 col-md-offset-1 borderRed">
                <?php include(INCLUDES_ROOTPATH."chat_entryForm.php"); ?> 
            </div>
        </div>
    </section>  
<?php include(INCLUDES_ROOTPATH."/footer.php"); ?>
