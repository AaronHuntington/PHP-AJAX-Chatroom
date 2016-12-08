<?php

    class chatroom{
    
        public $name;
        public $key;
        public $message;
        public $date;

        public function enter_message_to_db(){
            global $database;

            $name       = $database->escape_string($this->name);
            $key        = $database->escape_string($this->key);
            $message    = $database->escape_string($this->message);
            $date       = $this->date;

            $sql = "INSERT INTO chatrooms (`date`,`name`,`the_key`,`message`)
                VALUES ('".$date."','".$name."','".$key."','".$message."')";
            
            $send_to_database = $database->query($sql);

           return $send_to_database;
        }

        public function test(){
            echo $this->date;
            echo '<br>';
            echo $this->name;
            echo '<br>';
            echo $this->key;
            echo '<br>';
            echo $this->message;
        }
    }
?>