<?php

    class chatroom_switch{

        public function chatroom_switch_update(){
            global $database;
            $sql = "SELECT * FROM chatroom_switch";
            $query = $database->query($sql);

            $data = array();
            while($row = mysqli_fetch_array($query)){
                $data[] = $row;
            }
            return $data;
        }

        function chatrooms(){
            global $database;

            $sql = "SELECT * FROM chatroom_switch";
            $query = $database->query($sql);

            $result = $query->fetch_all(PDO::FETCH_ASSOC);
            return $result;
        }
    }
    

?>