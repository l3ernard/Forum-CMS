<?php
class Administrator extends DBConn{


    public function ShowUsers(){


        $query = "SELECT `id`, `username`, `level`, `email` FROM users";
        $result = $this->connect()->query($query);
        while($row = $result->fetch_assoc()){
            $array[] = $row;
        }
        return $array;
    }

}

