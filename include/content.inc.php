<?php
class UserContent extends DBConn{
    public function ShowNews(){

        $query = "SELECT `id`, `title`, `content`, `author`, `tags`, `date` FROM news";
        $result = $this->connect()->query($query);
        while($row = $result->fetch_assoc()){
            $array[] = $row;
        }
        return $array;

    }

}