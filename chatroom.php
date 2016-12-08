<?php
    require_once("/includes/config.php");
    require_oncE(INCLUDES_ROOTPATH."init.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" 
         content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
      <title>Quack</title>
      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Main CSS -->
      <link href="css/main.css" rel="stylesheet">
   </head>
   <body>
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
   </body>
</html>




