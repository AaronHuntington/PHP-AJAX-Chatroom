<?php

    class chatroom{
    
        public $name;
        public $key;
        public $message;
        public $date;

        public $guest_name; //Used for function 'create_chat_switch_on()'

        public function get_chatMessages_byKey($key){
            global $database; 

            $sql = 'SELECT * FROM chatrooms WHERE the_key='.$key.'';
            $query = $database->query($sql);

            $result = $query->fetch_all(PDO::FETCH_ASSOC);

            return $result;
        }

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

        public function create_chat_switch_on(){
            global $database;

            $guest_name = $database->escape_string($this->guest_name);
            $key        = $this->key;

            $sql = "INSERT INTO chatroom_switch (`guest_name`,`the_key`,`switch`) 
                VALUES ('".$guest_name."','".$key."','1')";

            $send_to_database= $database->query($sql);

            return $send_to_database;
        }

        public function key_generator($guest){
            date_default_timezone_set('America/Chicago');
            $random_number_start = rand(100,999);
            $random_number_end = rand(100,999);
            $date = date("mdy");
            $time = date("his", time());

            // $key = $random_number_start.$date.$time.$random_number_end;
            $key = $random_number_start.$time;

            $this->guest_name   = $guest;
            $this->key          = $key;
            $this->create_chat_switch_on();

            header('location: chatroom.php?guest='.$guest.'&susi='.$key);
        }

        public function setChatroom_inActive($key){
            global $database;

            $sql = 'UPDATE chatroom_switch SET switch=0 WHERE the_key='.$key.'';

            $send_to_database = $database->query($sql);
            return $send_to_database; 
        }

        public function delete_chatroom_switch($key){
            global $database;

            $sql = 'DELETE FROM chatroom_switch WHERE the_key = '.$key.'';

            $send_to_database = $database->query($sql);

            return $send_to_database;
        }

        public function delete_chatrooms($key){
            global $database;

            $sql = 'DELETE FROM chatrooms WHERE the_key = '.$key.'';

            $send_to_database= $database->query($sql);
            return $send_to_database;
        }

    }
?>