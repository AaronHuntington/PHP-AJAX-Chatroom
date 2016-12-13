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
        alert('we');
    },1000);//Updates the chat 1000 millisecond


</script>

    <section class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center">Quack</h1>
            <div id="chat_container" class="col-md-10 col-md-offset-1 borderRed">
                <h3>Greetings <?php echo $guest;?>! We will be right with you shortly.</h3>
                <?php



                







                ?>
            </div>
            <div id="chat_entry_container" class="col-md-10 col-md-offset-1 borderRed">
                <?php include(INCLUDES_ROOTPATH."chat_entryForm.php"); ?> 
            </div>
        </div>
    </section>  
<?php include(INCLUDES_ROOTPATH."/footer.php"); ?>
