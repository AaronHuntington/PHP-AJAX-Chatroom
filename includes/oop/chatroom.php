<?php

    class chatroom{
    
        public $name;
        public $key;
        public $message;

        public function enter_message_to_db(){
            global $database;

            $name       = $database->escape_string($this->name);
            $key        = $database->escape_string($this->key);
            $message    = $database->escape_string($this->key);
            $date       = $this->date;

            $sql = "INSERT INTO chatrooms (`date`,`name`,`key`,`message`)
                VALUES ('{$date}','{$name}','{$key}','{$message}')";
            
            $send_to_database = $database->query($sql);

           return $send_to_database;
        }
    }
?>