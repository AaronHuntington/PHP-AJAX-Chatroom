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

            // $chatroom['guestName'] = array();
            // $chatroom['key'] = array();
            // $chatroom['switch'] = array();

            // // while($row = mysqli_fetch_assoc($query)){
            // while ($row = $query->fetch_all(PDO::FETCH_ASSOC)) {
            //     $chatroom[]['guestName'] = $row[0];
            //     $chatroom[]['key'] = $row[0];
            //     $chatroom[]['switch'] = $row[0];

            // }

            $result = $query->fetch_all(PDO::FETCH_ASSOC);
            return $result;

            // return $chatroom;
        }
    }










        // public function get_inbox(){
        // global $database;

        // $sql = "SELECT * FROM contact_form_inbox";
        // $query = $database->query($sql);

        // $data = array();
        
        // while($row = mysqli_fetch_array($query)){
        //     $data[] = $row;
        // }
        // return $data;
    

?>