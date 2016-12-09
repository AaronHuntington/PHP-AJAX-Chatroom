<?php
    require_once("/includes/config.php");
    include(INCLUDES_ROOTPATH."/header.php");
?>
    <section class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center">Quack</h1>
            <div id="chat_container" class="col-md-10 col-md-offset-1 borderRed">
            </div>
            <div id="chat_entry_container" class="col-md-10 col-md-offset-1 borderRed">
                <?php include(INCLUDES_ROOTPATH."chat_entryForm.php"); ?> 
            </div>
        </div>
    </section>  
<?php include(INCLUDES_ROOTPATH."/footer.php"); ?>


