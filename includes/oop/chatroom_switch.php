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